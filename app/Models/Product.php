<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    const PRODUCT_ONL = 1;
    const PRODUCT_OFF = 0;
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'qty',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_products');
    }
}
