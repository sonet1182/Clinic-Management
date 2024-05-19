<?php

namespace App\Http\Controllers\Zone;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use App\Models\Thana;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ThanaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:thana-list|thana-create|thana-edit|thana-delete', ['only' => ['index','store']]);
         $this->middleware('permission:thana-create', ['only' => ['create','store']]);
         $this->middleware('permission:thana-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:thana-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $divisions = Division::all();
        $districts = Thana::all();
        return view('backend.thana.index', compact('divisions','districts'));
    }

    public function create()
    {
        $divisions = Division::all();
        return view('backend.thana.create', compact('divisions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(Thana::rules(), Thana::messages());

        Thana::create($validatedData);

        return back()->with('success', 'Thana added successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(Thana $thana)
    {
        $divisions = Division::all();
        $districts = District::where('division_id', $thana->division_id)->get();
        return view('backend.thana.edit', compact('thana','divisions','districts'));
    }



    public function update(Request $request, Thana $thana)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('districts')->ignore($thana->id),
            ],
            'division_id' => 'required|integer',
            'district_id' => 'required|integer',
            'status' => 'nullable',
        ], Thana::messages());

        $thana->update($request->only('name','division_id','district_id', 'status'));

        return back()->with('success', 'Thana updated successfully.');
    }



    public function destroy(Thana $district)
    {
        $district->delete();

        return back()->with('success', 'District deleted successfully.');
    }
}
