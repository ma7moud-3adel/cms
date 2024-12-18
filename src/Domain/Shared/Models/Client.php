<?php

namespace Domain\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_ar',
        'clientCategory_id',
        'link',
        'image',
    ];

    public function clientCat()
    {
        return $this->belongsTo(ClientCategory::class);
    }
}
