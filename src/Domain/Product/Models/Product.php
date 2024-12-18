<?php

namespace Domain\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable=[
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'price',
        'photo',
        'product_category_id',
        'meta_title_ar',
        'meta_title_en',
        'meta_desc_ar',
        'meta_desc_en',
        'keywords',
        'slug'
    ];
    public function productGallery():HasMany
    {
        return $this->hasMany(ProductGallery::class,'product_id');
    }
    public function productCategory():BelongsTo
    {
        return $this->belongsTo(ProductCategory::class,'product_category_id');
    }
}
