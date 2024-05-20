<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TestController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:banner-list|banner-create|banner-edit|banner-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:banner-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:banner-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:banner-delete', ['only' => ['destroy']]);
    // }


    public function index()
    {
        return view('backend.tests.index');
    }

    public function list(Request $request)
{
    if ($request->ajax()) {
        $data = Test::withoutTrashed()->latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '';
                $actionBtn .= '<button class="edit-btn btn btn-success btn-xs mr-1" data-row-id="' . $row->id . '">Edit</button>';
                $actionBtn .= '<button class="delete-btn btn btn-danger btn-xs" data-row-id="' . $row->id . '">Delete</button>';
                return $actionBtn;
            })
            ->addColumn('fee', function ($row) {
                if($row->price)
                {
                    return '<span class="text-success text-bold">' . number_format($row->price) . ' Tk</span>';
                }
            })
            ->rawColumns(['action', 'fee'])
            ->make(true);
    }
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:tests',
            'price' => 'required|numeric|min:0',
        ]);

        $test = Test::create($validatedData);

        $notification = [
            'alert-type' => 'success',
            'message' => 'Test has been added',
        ];

        if ($request->ajax()) {
            return response()->json(['success' => true, 'test' => $test]);
        } else {
            return back()->with($notification);
        }
    }

    public function edit($id)
    {
        $post = Test::findOrFail($id);

        if ($post)
            return view('backend.tests.edit', compact('post'));
        else
            return 'Data Not Found!';
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:tests,name,' . $id,
            'price' => 'required|numeric|min:0',
        ]);

        $test = Test::findOrFail($id);

        $test->update($validatedData);

        $notification = [
            'alert-type' => 'success',
            'message' => 'Test has been updated',
        ];

        if ($request->ajax()) {
            return response()->json(['success' => true, 'test' => $test]);
        } else {
            return back()->with($notification);
        }
    }

    public function destroy($id)
    {
        $data = Test::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Record not found'], 404);
        }

        $data->delete();

        return response()->json(['success' => true, 'message' => 'Record deleted successfully']);
    }
}
