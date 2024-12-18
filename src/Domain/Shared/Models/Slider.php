<?php

namespace Domain\Shared\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_ar',
        'sub_title_en',
        'sub_title_ar',
        'description_en',
        'description_ar',
        'image_en',
        'image_ar',
    ];
}
