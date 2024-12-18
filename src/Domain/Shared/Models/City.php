<?php

namespace Domain\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'gov_id',
    ];

    public function government()
    {
        return $this->belongsTo(Government::class, 'gov_id');
    }
}
