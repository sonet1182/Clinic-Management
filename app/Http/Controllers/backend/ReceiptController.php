<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Receipt;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ReceiptController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:receipt-list|receipt-create|receipt-edit|receipt-delete', ['only' => ['index','store']]);
         $this->middleware('permission:receipt-create', ['only' => ['create','store']]);
         $this->middleware('permission:receipt-edit', ['only' => ['edit','update']]);
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
                    $actionBtn .= '<button class="edit-btn btn btn-success btn-xs mr-1" data-row-id="' . $row->id . '">Edit</button>';
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
}
