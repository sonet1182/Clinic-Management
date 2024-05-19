<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = [];

    public function category_id()
    {
        return $this->belongsTo(Category::class,'category');
    }

    public function brandData()
    {
        return $this->belongsTo(Brand::class,'brand');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
