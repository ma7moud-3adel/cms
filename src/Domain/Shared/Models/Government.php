<?php

namespace Domain\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
