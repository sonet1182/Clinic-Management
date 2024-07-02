<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PromoCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PromoCodeController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('permission:offer-list|offer-create|offer-edit|offer-delete', ['only' => ['index', 'store']]);
    //     $this->middleware('permission:offer-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:offer-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:offer-delete', ['only' => ['destroy']]);
    // }


    public function index()
    {
        return view('backend.promocodes.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = PromoCode::withoutTrashed()->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('imageview', function ($row) {
                    if (!empty($row->image)) {
                        $imageUrl = $row->image;
                    } else {
                        $imageUrl = asset('demo_img.jpg');
                    }
                    return '<a href="' . $imageUrl . '" data-lightbox="product-gallery" data-title="">
                        <img src="/' . $imageUrl . '" alt="Product Image" class="img-thumbnail" width="50" height="50">
                    </a>';
                })
                ->addColumn('start', function ($row) {
                    $time = !empty($row->start_from) ? Carbon::parse($row->start_from)->format('h:i A | d F, Y') : '';
                    return $time;
                })
                ->addColumn('end', function ($row) {
                    $time = !empty($row->end_to) ? Carbon::parse($row->end_to)->format('h:i A | d F, Y') : '';
                    return $time;
                })
                ->addColumn('status_check', function ($row) {
                    if($row->status)
                    {
                        return '<p class="w-100 text-center"><i class="fa fa-check text-success text-center" aria-hidden="true"></i></p>';
                    }else{
                        return '<p class="w-100 text-center"><i class="fa fa-times text-danger text-center" aria-hidden="true"></i></p>';
                    }
                })
                ->addColumn('code_type', function ($row) {
                    if($row->type == 1)
                    {
                        return 'Percentage';
                    }else{
                        return 'Fixed';
                    }
                })
                ->addColumn('code_amount', function ($row) {
                    $amount = $row->amount;
                    if($row->type == 1)
                    {
                        return '<p class="w-100 text-center">'. $amount .'%</p>';
                    }else{
                        return '<p class="w-100 text-center">'. $amount .'/=</p>';;
                    }
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                    $actionBtn .= '<button class="edit-btn btn btn-success btn-xs mr-1" data-row-id="' . $row->id . '">Edit</button>';
                    $actionBtn .= '<button class="delete-btn btn btn-danger btn-xs" data-row-id="' . $row->id . '">Delete</button>';

                    return $actionBtn;
                })
                ->rawColumns(['imageview', 'action','status_check','code_amount'])
                ->make(true);
        }
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:promo_codes,code',
            'type' => 'required',
            'amount' => 'required',
            'range' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (isset($request->limit) && $validatedData['range']) {
            list($startTimestamp, $endTimestamp) = $this->extractTimestamps($validatedData['range']);
            $validatedData['start_from'] = Carbon::createFromTimestamp($startTimestamp);
            $validatedData['end_to'] = Carbon::createFromTimestamp($endTimestamp);
        } else {
            $validatedData['start_from'] = null;
            $validatedData['end_to'] = null;
        }

        unset($validatedData['range']);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $this->UploadImage($request, 'image', 'images/promocodes/', '300', '300');
        }

        if ($request->status) {
            $validatedData['status'] = 1;
        } else {
            $validatedData['status'] = 0;
        }

        $promo = PromoCode::create($validatedData);

        $notification = [
            'alert-type' => 'success',
            'message' => 'Promo Code has been added',
        ];

        if ($request->ajax()) {
            return response()->json(['success' => true, 'promo' => $promo]);
        } else {
            return back()->with($notification);
        }
    }




    public function edit($id)
    {
        $post = PromoCode::findOrFail($id);

        if ($post)
            return view('backend.promocodes.edit', compact('post'));
        else
            return 'Data Not Found!';
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:promo_codes,code,' . $id,
            'type' => 'required',
            'amount' => 'required',
            'range' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $promo = PromoCode::findOrFail($id);

        if (isset($request->limit) && $validatedData['range']) {
            list($startTimestamp, $endTimestamp) = $this->extractTimestamps($validatedData['range']);
            $validatedData['start_from'] = Carbon::createFromTimestamp($startTimestamp);
            $validatedData['end_to'] = Carbon::createFromTimestamp($endTimestamp);
        } else {
            $validatedData['start_from'] = null;
            $validatedData['end_to'] = null;
        }

        unset($validatedData['range']);
        if ($request->hasFile('image')) {
            $validatedData['image'] = $this->UploadImage($request, 'image', 'images/promocodes/', '300', '300', $promo->image);
        }

        if ($request->status) {
            $validatedData['status'] = 1;
        } else {
            $validatedData['status'] = 0;
        }

        $promo->update($validatedData);

        $notification = [
            'alert-type' => 'success',
            'message' => 'Promo Code has been updated',
        ];

        if ($request->ajax()) {
            return response()->json(['success' => true, 'promo' => $promo]);
        } else {
            return back()->with($notification);
        }
    }

    public function destroy($id)
    {
        $data = PromoCode::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Record not found'], 404);
        }

        $data->delete();

        return response()->json(['success' => true, 'message' => 'Record deleted successfully']);
    }


    private function extractTimestamps($range)
    {
        $timestamps = explode(' - ', $range);
        $startTimestamp = strtotime($timestamps[0]);
        $endTimestamp = strtotime($timestamps[1]);

        return [$startTimestamp, $endTimestamp];
    }
}
