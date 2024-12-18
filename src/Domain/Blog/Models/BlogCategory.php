<?php

namespace Domain\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'meta_name_en',
        'meta_name_ar',
        'meta_description_en',
        'meta_description_ar',
        'meta_keywords_en',
        'meta_keywords_ar',
        'slug'
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_blog_categories', 'blog_id', 'category_id');
    }
}
