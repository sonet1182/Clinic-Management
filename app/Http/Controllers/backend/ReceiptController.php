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
                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                    $actionBtn .= '<a href="' . route('print', $row->id) . '" target="_blank" class="btn btn-success btn-xs mr-1">Print</a>';
                    $actionBtn .= '<button class="delete-btn btn btn-danger btn-xs" data-row-id="' . $row->id . '">Delete</button>';

                    return $actionBtn;
                })
                ->rawColumns(['action'])
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
        $receipt->total_price = $request->input('totalPrice');
        $receipt->total_vat = $request->input('totalVat');
        $receipt->coupon_discount = $request->input('couponDiscount');
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
        // Custom validation messages
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
        $patientName = $request->input('pdf_patientName');
        $patientAge = $request->input('pdf_patientAge');
        $patientAddress = $request->input('pdf_patientAddress');
        $totalPrice = $request->input('pdf_totalPrice');
        $totalVat = $request->input('pdf_totalVat');
        $couponDiscount = $request->input('pdf_couponDiscount');
        $finalPrice = $request->input('pdf_finalPrice');
        $items = json_decode($request->input('pdf_items'), true); // Decode JSON string to array

        // Create HTML content for the PDF
        $html = '<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body {
                line-height: 1.6;
                font-weight: 400;
            }
            .header {
                text-align: center;
                margin-bottom: 20px;
            }
            .patient-info {
                margin-bottom: 20px;
            }
            .item-list {
                width: 100%;
                border-collapse: collapse;
            }
            .item-list th, .item-list td {
                border: 1px solid #000;
                padding: 8px;
            }
            .totals {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>Receipt</h1>
        </div>
        <div class="patient-info">
            <p><strong>Patient Name:</strong> ' . htmlspecialchars($patientName) . '</p>
            <p><strong>Patient Age:</strong> ' . htmlspecialchars($patientAge) . '</p>
            <p><strong>Patient Address:</strong> ' . htmlspecialchars($patientAddress) . '</p>
        </div>
        <table class="item-list">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Fee</th>
                    <th>Total Discount</th>
                    <th>Patient Discount</th>
                    <th>Reference Discount</th>
                    <th>Doctor Commission</th>
                    <th>Payment</th>
                </tr>
            </thead>
            <tbody>';

        // Loop through items and create rows
        foreach ($items as $item) {
            $html .= '<tr>
                    <td>' . htmlspecialchars($item['name']) . '</td>
                    <td>' . number_format($item['fee'], 2) . ' Tk</td>
                    <td>' . number_format($item['totalDiscount'], 2) . ' Tk</td>
                    <td>' . number_format($item['patientDiscount'], 2) . ' Tk</td>
                    <td>' . number_format($item['referenceDiscount'], 2) . ' Tk</td>
                    <td>' . number_format($item['doctorCommission'], 2) . ' Tk</td>
                    <td>' . number_format($item['payment'], 2) . ' Tk</td>
                </tr>';
        }

        $html .= '</tbody>
        </table>
        <div class="totals">
            <p><strong>Total Fee:</strong> ' . number_format($totalPrice, 2) . ' Tk</p>
            <p><strong>Total VAT (15%):</strong> ' . number_format($totalVat, 2) . ' Tk</p>
            <p><strong>Coupon Discount:</strong> ' . number_format($couponDiscount, 2) . ' Tk</p>
            <p><strong>Total Fee with VAT:</strong> ' . number_format($finalPrice, 2) . ' Tk</p>
        </div>
    </body>
    </html>';

        return $html;
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

        // Create HTML content for the PDF
        $html = '<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body {
                line-height: 1.6;
                font-weight: 400;
            }
            .header {
                text-align: center;
                margin-bottom: 20px;
            }
            .patient-info {
                margin-bottom: 20px;
            }
            .item-list {
                width: 100%;
                border-collapse: collapse;
            }
            .item-list th, .item-list td {
                border: 1px solid #000;
                padding: 8px;
            }
            .totals {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>Receipt</h1>
        </div>
        <div class="patient-info">
            <p><strong>Patient Name:</strong> ' . htmlspecialchars($patientName) . '</p>
            <p><strong>Patient Age:</strong> ' . htmlspecialchars($patientAge) . '</p>
            <p><strong>Patient Address:</strong> ' . htmlspecialchars($patientAddress) . '</p>
        </div>
        <table class="item-list">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Fee</th>
                    <th>Total Discount</th>
                    <th>Patient Discount</th>
                    <th>Reference Discount</th>
                    <th>Doctor Commission</th>
                    <th>Payment</th>
                </tr>
            </thead>
            <tbody>';

        // Loop through items and create rows
        foreach ($items as $item) {
            $html .= '<tr>
                    <td>' . htmlspecialchars($item['name']) . '</td>
                    <td>' . number_format($item['fee'], 2) . ' Tk</td>
                    <td>' . number_format($item['totalDiscount'], 2) . ' Tk</td>
                    <td>' . number_format($item['patientDiscount'], 2) . ' Tk</td>
                    <td>' . number_format($item['referenceDiscount'], 2) . ' Tk</td>
                    <td>' . number_format($item['doctorCommission'], 2) . ' Tk</td>
                    <td>' . number_format($item['payment'], 2) . ' Tk</td>
                </tr>';
        }

        $html .= '</tbody>
        </table>
        <div class="totals">
            <p><strong>Total Fee:</strong> ' . number_format($totalPrice, 2) . ' Tk</p>
            <p><strong>Total VAT (15%):</strong> ' . number_format($totalVat, 2) . ' Tk</p>
            <p><strong>Coupon Discount:</strong> ' . number_format($couponDiscount, 2) . ' Tk</p>
            <p><strong>Total Fee with VAT:</strong> ' . number_format($finalPrice, 2) . ' Tk</p>
        </div>
    </body>
    </html>';

        return $html;
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
