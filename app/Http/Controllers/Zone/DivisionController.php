<?php

namespace App\Http\Controllers\Zone;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class DivisionController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:division-list|division-create|division-edit|division-delete', ['only' => ['index','store']]);
         $this->middleware('permission:division-create', ['only' => ['create','store']]);
         $this->middleware('permission:division-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:division-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $divisions = Division::all();
        return view('backend.divisions.index', compact('divisions'));
    }

    public function create()
    {
        return view('backend.divisions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(Division::rules(), Division::messages());

        Division::create($validatedData);

        return back()->with('success', 'Division added successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit(Division $division)
    {
        return view('backend.divisions.edit', compact('division'));
    }



    public function update(Request $request, Division $division)
    {
        // return $request->all();
        $request->validate([
            'name' => [
                'required',
                Rule::unique('divisions')->ignore($division->id),
            ],
            'status' => 'nullable',
        ], Division::messages());

        $division->update($request->only('name', 'status'));

        return back()->with('success', 'Division updated successfully.');
    }



    public function destroy(Division $division)
    {
        $division->delete();

        return back()->with('success', 'Division deleted successfully.');
    }
}
