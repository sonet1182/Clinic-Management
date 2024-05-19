<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = [];

    public static function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'required|string|max:255|unique:brands,slug',
            'logo' => 'nullable',
            'status' => 'nullable',
        ];
    }

    public static function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'slug.required' => 'The slug field is required.',
        ];
    }
}
