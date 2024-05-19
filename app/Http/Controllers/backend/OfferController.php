<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OfferController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:offer-list|offer-create|offer-edit|offer-delete', ['only' => ['index','store']]);
         $this->middleware('permission:offer-create', ['only' => ['create','store']]);
         $this->middleware('permission:offer-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:offer-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        return view('offers.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Offer::withoutTrashed()->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('imageview', function ($row) {
                    if (!empty($row->image)) {
                        $imageUrl = $row->image;
                    } else {
                        $imageUrl = asset('/demo_img.jpg');
                    }
                    return '<a href="' . $imageUrl . '" data-lightbox="product-gallery" data-title="">
                        <img src="' . $imageUrl . '" alt="Product Image" class="img-thumbnail" width="50" height="50">
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
                ->addColumn('action', function ($row) {
                    $editUrl = route('offers.edit', $row->id);
                    $deleteUrl = route('offers.destroy', $row->id);

                    $actionBtn = '';


                    $actionBtn .= '<a href="' . $editUrl . '" class="edit btn btn-success btn-xs" data-toggle="tooltip"
                        data-original-title="edit">Edit</a> ';


                    $actionBtn .= '<form action="' . $deleteUrl . '" method="POST" style="display:inline;">
                                        ' . csrf_field() . '
                                        ' . method_field('DELETE') . '
                                        <button type="submit" class="delete btn btn-danger btn-xs">Delete</button>
                                   </form>';


                    return $actionBtn;
                })
                ->rawColumns(['imageview', 'action'])
                ->make(true);
        }
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:offers,slug',
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
            $validatedData['image'] = $this->UploadImage($request, 'image', 'images/offers/', '1200', '400');
        }

        Offer::create($validatedData);

        $notification = [
            'alert-type' => 'success',
            'message' => 'Offer has been added',
        ];

        return back()->with($notification);
    }


    public function edit($id)
    {
        $post = Offer::findOrFail($id);
        return view('offers.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:offers,slug,' . $id,
            'range' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $brand = Offer::findOrFail($id);

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
            $validatedData['image'] = $this->UploadImage($request, 'image', 'images/offers/', '1200', '400', $brand->image);
        }

        $brand->update($validatedData);

        $notification = [
            'alert-type' => 'success',
            'message' => 'Offer has been updated',
        ];

        return back()->with($notification);
    }

    public function destroy($id)
    {
        $data = Offer::find($id);

        if (!is_null($data)) {

            $data->delete();

            $notification = array(
                'alert-type' => 'error',
                'message' => 'Offer Is Now in Soft Delete Mode'
            );
        } else {
            $notification = array(
                'alert-type' => 'error',
                'message' => 'Something Wrong!'
            );
        }
        return back()->with($notification);
    }


    private function extractTimestamps($range)
    {
        $timestamps = explode(' - ', $range);
        $startTimestamp = strtotime($timestamps[0]);
        $endTimestamp = strtotime($timestamps[1]);

        return [$startTimestamp, $endTimestamp];
    }
}
