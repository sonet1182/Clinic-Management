<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    public function index()
    {
        return view('brands.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Brand::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('imageview', function ($row) {
                    if (!empty($row->logo)) {
                        $imageUrl = $row->logo;
                    } else {
                        $imageUrl = asset('/demo_img.jpg');
                    }
                    return '<a href="' . $imageUrl . '" data-lightbox="product-gallery" data-title="">
                        <img src="' . $imageUrl . '" alt="Product Image" class="img-thumbnail" width="50" height="50">
                    </a>';
                })
                ->addColumn('action', function ($row) {
                    $editUrl = route('brands.edit', $row->id);
                    $deleteUrl = route('brands.destroy', $row->id);

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
        $validatedData = $request->validate(Brand::rules(), Brand::messages());
        $validatedData['logo'] = $this->UploadImage($request, 'image', 'images/brands/', '300', '300');
        Brand::create($validatedData);

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Brand has been added'
        );

        return back()->with($notification);
    }


    public function edit($id)
    {
        $post = Brand::findOrFail($id);
        return view('brands.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:brands,slug,' . $id,
        ]);

        $brand = Brand::findOrFail($id);
        $validatedData['logo'] = $this->UploadImage($request, 'image', 'images/brands/', '300', '300', $brand->logo);

        $brand->update($validatedData);

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Brand has been updated'
        );

        return back()->with($notification);
    }
}
