<?php

namespace Domain\Shared\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value', 'type','category','title'];
    public $timestamps = false;
}
