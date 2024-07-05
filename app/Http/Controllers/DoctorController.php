<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DoctorController extends Controller
{
    public function index()
    {
        return view('doctor.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Doctor::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('imageview', function ($row) {
                    if (!empty($row->image)) {
                        $imageUrl = $row->image;
                    } else {
                        $imageUrl = asset('demo_img.jpg');
                    }
                    return '<a href="' . $imageUrl . '" data-lightbox="product-gallery" data-title="">
                        <img src="/' . $imageUrl . '" alt="Doctor Image" class="img-thumbnail" width="50" height="50">
                    </a>';
                })
                ->addColumn('action', function ($row) {
                    $editUrl = route('doctors.edit', $row->id);
                    $deleteUrl = route('doctors.destroy', $row->id);

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
        $validatedData = $request->validate(Doctor::rules(), Doctor::messages());
        $validatedData['image'] = $this->UploadImage($request, 'image', 'images/doctors/', '300', '300');
        Doctor::create($validatedData);

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Doctor has been added'
        );

        return back()->with($notification);
    }


    public function edit($id)
    {
        $post = Doctor::findOrFail($id);
        return view('doctor.edit', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required',
            'phone' => 'nullable',
        ]);

        $doctor = Doctor::findOrFail($id);
        $validatedData['image'] = $this->UploadImage($request, 'image', 'images/doctors/', '300', '300', $doctor->image);

        $doctor->update($validatedData);

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Doctor has been updated'
        );

        return back()->with($notification);
    }

    public function destroy($id)
    {
        $data = Doctor::find($id);

        if (!$data) {
            $notification = [
                'alert-type' => 'error',
                'message' => 'Record Not Found!',
            ];

            return back()->with($notification);
        }

        $data->delete();

        $notification = [
            'alert-type' => 'success',
            'message' => 'Record Deleted Successfully!',
        ];

        return back()->with($notification);
    }
}
