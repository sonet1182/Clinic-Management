<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\backend\WebPropertyRequest;
use App\Models\FormInput;
use App\Models\WebProperty;

class WebSettingsController extends Controller
{

    public function index()
    {
        $field = ['type', 'title', 'data', 'style', 'image'];

        $formInputs = FormInput::whereIn('name', $field)
            ->get()
            ->sortBy(function ($item) use ($field) {
                return array_search($item->name, $field);
            });

        $typeOptions = [
            ['value' => 'image', 'label' => 'Logo/Image/Icon'],
            ['value' => 'address', 'label' => 'Address'],
            ['value' => 'social', 'label' => 'Social Link'],
            ['value' => 'contact', 'label' => 'Contact'],
        ];

        return view('backend.pages.web_property.form', compact('formInputs', 'typeOptions'));
    }


    public function store(WebPropertyRequest $request)
    {
        try {
            $input = $request->validated();
            WebProperty::create($input);

            $notification = [
                'alert-type' => 'success',
                'message' => 'Card Member Created Successfully',
            ];
        } catch (\Exception $e) {

            $notification = [
                'alert-type' => 'error',
                'message' => 'Failed to add Card Member: ' . $e->getMessage(),
            ];
        }

        return back()->with($notification);
    }

    public function edit(FormInput $formInput)
    {
        $field = [1, 2, 3, 4];
        $formInputs = FormInput::whereIn('id', $field)->get();
        $formInputs = $formInputs->sortBy(function ($item) use ($field) {
            return array_search($item->id, $field);
        });
        $record = '';
        return view('backend.pages.web_property.form', compact('formInput', 'record'));
    }
}
