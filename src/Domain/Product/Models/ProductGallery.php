<?php

namespace Domain\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductGallery extends Model
{
    protected $fillable=[
        'product_id',
        'photos'
    ];
    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
