<?php

namespace Domain\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_ar',
    ];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
