<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PromoCode;
use App\Models\Receipt;
use App\Models\Test;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mpdf\Mpdf;
use Yajra\DataTables\Facades\DataTables;

class ReceiptController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:receipt-list|receipt-create|receipt-edit|receipt-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:receipt-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:receipt-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:receipt-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('backend.receipts.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $query = Receipt::withoutTrashed()->latest();

            if ($request->has('date_range') && !empty($request->date_range)) {
                $dateRange = explode(' - ', $request->date_range);
                $startDate = Carbon::parse($dateRange[0]);
                $endDate = Carbon::parse($dateRange[1]);
                $query->whereBetween('created_at', [$startDate, $endDate]);
            }

            $data = $query->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->format('h:i A | d M, Y');
                })
                ->addColumn('item', function ($row) {
                    $item = '';

                    if ($row->needle > 0) {
                        $needle = '<div>Needle: '. $row->needle .'</div>';  
                        $item .= $needle;               
                    } 
                    if ($row->red_tube > 0) {
                        $red_tube = '<div>Red Tube: '. $row->red_tube .'</div>';
                        $item .= $red_tube;
                    } 
                    if ($row->others > 0) {
                        $others = '<div>Others: '. $row->others .'</div>';
                        $item .= $others;
                    } 
                     
                    return $item;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                    $actionBtn .= '<a href="' . route('print', $row->id) . '" target="_blank" class="btn btn-success btn-xs mr-1">Print</a>';
                    $actionBtn .= '<button class="delete-btn btn btn-danger btn-xs" data-row-id="' . $row->id . '">Delete</button>';

                    return $actionBtn;
                })
                ->rawColumns(['item','action'])
                ->make(true);
        }
    }


    public function create()
    {
        $tests = Test::withoutTrashed()->latest()->get();
        $packages = Package::withoutTrashed()->latest()->get();
        return view('backend.receipts.create', compact('tests', 'packages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patientName' => 'required|string|max:255',
            'patientAge' => 'required|integer|min:0',
            'patientAddress' => 'required|string|max:255',
            'totalPrice' => 'required|numeric',
            'totalVat' => 'required|numeric',
            'finalPrice' => 'required|numeric',
            'items' => 'required|array',
            'items.*.name' => 'required|string',
            'items.*.fee' => 'required|numeric',
            'items.*.totalDiscount' => 'required|numeric',
            'items.*.patientDiscount' => 'required|numeric',
            'items.*.referenceDiscount' => 'required|numeric',
            'items.*.doctorCommission' => 'required|numeric',
            'items.*.payment' => 'required|numeric',
        ]);

        $receipt = new Receipt();
        $receipt->patient_name = $request->input('patientName');
        $receipt->patient_age = $request->input('patientAge');
        $receipt->patient_address = $request->input('patientAddress');

        $receipt->patient_phone = $request->input('patientPhone');
        $receipt->patient_type = $request->input('patientType');
        $receipt->patient_gender = $request->input('patientGender');

        $receipt->reference = $request->input('reference');
        $receipt->doctor_room = $request->input('doctorRoom');
        $receipt->doctor_room = $request->input('doctorRoom');

        $receipt->needle = $request->input('additionalCheckbox');
        $receipt->red_tube = $request->input('additionalCheckbox2');
        $receipt->others = $request->input('additionalInput');

        $receipt->total_price = $request->input('totalPrice');
        $receipt->total_vat = $request->input('totalVat');
        $receipt->coupon_discount = $request->input('couponDiscount');
        $receipt->clinic_account = $request->input('clinicAccount');
        $receipt->final_price = $request->input('finalPrice');
        $receipt->items = json_encode($request->input('items'));
        $receipt->save();

        return response()->json(['message' => 'Receipt generated successfully!', 'receipt' => $receipt], 201);
    }

    public function destroy($id)
    {
        $data = Receipt::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Record not found'], 404);
        }

        $data->delete();

        return response()->json(['success' => true, 'message' => 'Record deleted successfully']);
    }

    function generatePDF(Request $request)
    {

        // return $request;

        $messages = [
            'pdf_patientName.required' => 'Patient Name is required.',
            'pdf_patientAge.required' => 'Patient Age is required.',
            'pdf_patientAge.integer' => 'Patient Age must be an integer.',
            'pdf_patientAge.min' => 'Patient Age must be at least 0.',
            'pdf_patientAddress.required' => 'Patient Address is required.',
            'pdf_items.required' => 'At least one test or package is required.',
            'pdf_items.json' => 'Invalid format for items.',
        ];

        // Validate the request
        $request->validate([
            'pdf_patientName' => 'required|string|max:255',
            'pdf_patientAge' => 'required|integer|min:0',
            'pdf_patientAddress' => 'required|string|max:255',
            'pdf_items' => 'required|json',
        ], $messages);


        $items = json_decode($request->input('pdf_items'), true);

        if (empty($items)) {
            return redirect()->back()->withErrors(['pdf_items' => 'Add at least one test or package.'])->withInput();
        }

        $pdf = new \Mpdf\Mpdf([
            'default_font' => 'nikosh',
            'default_font_size' => '12',
        ]);

        $pdf->WriteHTML($this->pdf_html($request));

        $pdf->Output();
    }


    function pdf_html(Request $request)
    {
        // Fetch data from POST request
        $patientId = $request->input('pdf_patientId');
        $patientName = $request->input('pdf_patientName');
        $patientAge = $request->input('pdf_patientAge');
        $patientAddress = $request->input('pdf_patientAddress');
        $totalPrice = $request->input('pdf_totalPrice');
        $totalVat = $request->input('pdf_totalVat');
        $couponDiscount = $request->input('pdf_couponDiscount');
        $finalPrice = $request->input('pdf_finalPrice');
        $items = json_decode($request->input('pdf_items'), true); // Decode JSON string to array


        $receipt_id = Receipt::withoutTrashed()->latest()->first()->id + 1;
        $receipt = $request;

        return view('pdf.document2', compact('receipt','receipt_id'));
    }



    public function printPDF($id)
    {
        $receipt = Receipt::find($id);

        if (!$receipt) {
            return redirect()->back()->withErrors('Receipt not found');
        }

        $pdf = new \Mpdf\Mpdf([
            'default_font' => 'nikosh',
            'default_font_size' => '12',
        ]);

        $pdf->WriteHTML($this->pdf_html_print($receipt));

        $pdf->Output();

        $notification = [
            'alert-type' => 'success',
            'message' => 'Rceipt Generated!',
        ];

        return back()->with($notification);
    }

    public function pdf_html_print($receipt)
    {
        // Fetch data from the Receipt object
        $patientName = $receipt->patient_name;
        $patientAge = $receipt->patient_age;
        $patientAddress = $receipt->patient_address;
        $totalPrice = $receipt->total_price;
        $totalVat = $receipt->total_vat;
        $couponDiscount = $receipt->coupon_discount;
        $finalPrice = $receipt->final_price;
        $items = json_decode($receipt->items, true); // Decode JSON string to array

        return view('pdf.document', compact('receipt'));
    }


    public function validatePromoCode(Request $request)
    {
        $code = $request->input('promoCode');

        // Start building the query
        $query = PromoCode::where('code', $code)
            ->where('status', 1);

        // Conditionally add the date checks
        $promoCode = $query->when(
            PromoCode::where('code', $code)->value('start_from'),
            function ($query) {
                return $query->where('start_from', '<=', now())
                    ->where('end_to', '>=', now());
            }
        )->first();

        if ($promoCode) {
            return response()->json(['success' => true, 'promoCode' => $promoCode]);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid promo code']);
        }
    }
}
