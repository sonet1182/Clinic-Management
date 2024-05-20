<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class PackageController extends Controller
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
        $packages = Package::latest()->get();
        return view('backend.packages.index', compact('packages'));
    }

    public function create()
    {
        $tests = Test::get();
        return view('backend.packages.create', compact('tests'));
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Package::withoutTrashed()->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'tests' => 'required|array',
            'tests.*' => 'exists:tests,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $package = new Package();
        $package->name = $request->input('name');
        $package->price = $request->input('price');
        $package->test_list = json_encode($request->input('tests')); // Save tests as JSON
        $package->save();

        $notification = [
            'alert-type' => 'success',
            'message' => 'Package has been added',
        ];

        return redirect()->route('packages.index')->with($notification);
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);
        $tests = Test::all();
        return view('backend.packages.edit', compact('package', 'tests'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'tests' => 'required|array',
            'tests.*' => 'exists:tests,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $package = Package::findOrFail($id);
        $package->name = $request->input('name');
        $package->price = $request->input('price');
        $package->test_list = json_encode($request->input('tests')); // Save tests as JSON
        $package->save();

        return redirect()->route('packages.index')
            ->with('success', 'Package updated successfully.');
    }

    public function destroy($id)
    {
        $data = Package::find($id);

        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Record not found'], 404);
        }

        $data->delete();

        return response()->json(['success' => true, 'message' => 'Record deleted successfully']);
    }
}
