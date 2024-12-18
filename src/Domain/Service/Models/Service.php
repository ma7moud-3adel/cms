<?php

namespace Domain\Service\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'photo',
        'service_group_id',
        'meta_title_en',
        'meta_title_ar',
        'meta_desc_en',
        'meta_desc_ar',
        'keywords',
        'slug'
    ];
    public function serviceGroup():BelongsTo
    {
       return $this->belongsTo(ServiceGroup::class,'service_group_id');
    }
}
