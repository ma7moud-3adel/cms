<?php

namespace Domain\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_name', 'phone', 'comment', 'blog_id'];

    public function blogs()
    {
        return $this->belongsTo(Blog::class);
    }
}
