<?php

namespace Domain\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
    ];
    public function product():HasMany
    {
        return $this->hasMany(Product::class,'product_category_id');
    }
}
