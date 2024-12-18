<?php

namespace Domain\Service\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceGroup extends Model
{
    use SoftDeletes;
    protected $fillable=[
        'name_en',
        'name_ar',
        'description_en',
        'description_ar'
    ];
    public function service():HasMany
    {
        return $this->hasMany(ServiceGroup::class,'service_group_id');
    }
}
