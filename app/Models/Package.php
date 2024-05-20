<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'price', 'test_list',
    ];

    protected $casts = [
        'test_list' => 'array', // Automatically cast test_list to array
    ];

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'test_package', 'package_id', 'test_id');
    }

    public function getTestNamesAttribute()
    {
        $testIds = json_decode($this->test_list, true); // Decode JSON string into an array

        if (is_array($testIds) && !empty($testIds)) {
            return Test::whereIn('id', $testIds)->pluck('name');
        }

        return collect(); // Return an empty collection if there are no test IDs
    }
}
