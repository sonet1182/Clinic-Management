<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'division_id', 'status'];

    public static function rules()
    {
        return [
            'name' => 'required|unique:districts',
            'division_id' => 'required|integer',
            'status' => 'nullable',
        ];
    }

    public static function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'division_id.required' => 'The division field is required.',
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

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
