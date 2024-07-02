<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = [];

    public static function rules()
    {
        return [
            'name' => 'required',
            'post' => 'required',
            'details' => 'nullable',
            'phone' => 'nullable',
            'image' => 'nullable',
            'status' => 'nullable',
        ];
    }

    public static function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'post.required' => 'The post field is required.',
        ];
    }
}
