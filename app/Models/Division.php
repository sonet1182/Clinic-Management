<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Division extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'status'];

    public static function rules()
    {
        return [
            'name' => 'required|unique:divisions',
            'status' => 'nullable',
        ];
    }

    public static function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'status.boolean' => 'The status field must be a boolean value.',
        ];
    }

    // Accessor
    public function getStatusAttribute($value)
    {
        return $value ? true : false;
    }

    // Mutator
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value ? 1 : 0;
    }

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
