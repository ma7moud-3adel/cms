<?php

namespace Domain\Blog\Services;

use App\Http\Requests\Dashboard\Blog\BlogRequest;
use Domain\Blog\DTOs\BlogData;
use Domain\Blog\Models\Blog;
use Domain\Shared\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Storage;

class BlogService
{
    use ImageUploadTrait;


    public function createBlog(BlogData $data, BlogRequest $request): void
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
        }

        Blog::create([
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'image' => $imagePath,
            'section' => $data->section,
            'meta_name_en' => $data->meta_name_en,
            'meta_name_ar' => $data->meta_name_ar,
            'meta_description_en' => $data->meta_description_en,
            'meta_description_ar' => $data->meta_description_ar,
            'meta_keywords_en' => $data->meta_keywords_en,
            'meta_keywords_ar' => $data->meta_keywords_ar,
            'slug' => $data->slug,
        ]);
    }


    public function updateBlog($id, BlogData $data, BlogRequest $request): void
    {
        $blog = Blog::findOrFail($id);

        $imagePath = $data->image;
        if ($request->hasFile('image')) {
            // حذف الصورة القديمة إذا كانت موجودة
            if ($imagePath) {
                Storage::delete('public/' . $imagePath);
            }

            // حفظ الصورة الجديدة
            $imagePath = $request->file('image')->store('image', 'public');
        }


        $updateData = [
            'name_en' => $data->name_en,
            'name_ar' => $data->name_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'image' => $imagePath,
            'section' => $data->section,
            'meta_name_en' => $data->meta_name_en,
            'meta_name_ar' => $data->meta_name_ar,
            'meta_description_en' => $data->meta_description_en,
            'meta_description_ar' => $data->meta_description_ar,
            'meta_keywords_en' => $data->meta_keywords_en,
            'meta_keywords_ar' => $data->meta_keywords_ar,
            'slug' => $data->slug,
        ];
        $blog->update($updateData);
    }


    public function deleteBlog($id): void
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image_path) {
            Storage::delete('public/' . $blog->image_path);
        }
        $blog->delete();
    }
}
