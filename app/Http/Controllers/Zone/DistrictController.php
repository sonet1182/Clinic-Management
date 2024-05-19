<?php

namespace App\Http\Controllers\Zone;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DistrictController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:district-list|district-create|district-edit|district-delete', ['only' => ['index','store']]);
         $this->middleware('permission:district-create', ['only' => ['create','store']]);
         $this->middleware('permission:district-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:district-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $districts = District::all();
        return view('backend.districts.index', compact('districts'));
    }

    public function create()
    {
        $divisions = Division::all();
        return view('backend.districts.create', compact('divisions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(District::rules(), District::messages());

        District::create($validatedData);

        return back()->with('success', 'District added successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(District $district)
    {
        $divisions = Division::all();
        return view('backend.districts.edit', compact('divisions','district'));
    }



    public function update(Request $request, District $district)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('districts')->ignore($district->id),
            ],
            'division_id' => 'required|integer',
            'status' => 'nullable',
        ], District::messages());

        $district->update($request->only('name', 'status'));

        return back()->with('success', 'District updated successfully.');
    }



    public function destroy(District $district)
    {
        $district->delete();

        return back()->with('success', 'District deleted successfully.');
    }
}
