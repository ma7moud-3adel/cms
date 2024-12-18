<?php

namespace Domain\Blog\Services;

use App\Http\Requests\Dashboard\Blog\BlogCategoryRequest;
use Domain\Blog\DTOs\BlogCategoryData;
use Domain\Blog\Models\BlogCategory;
use Domain\Shared\Traits\ImageUploadTrait;

class BlogCategoryService
{
    use ImageUploadTrait;


    public function createSection(BlogCategoryData $data, BlogCategoryRequest $request): void
    {

        BlogCategory::create([
            'title_en' => $data->title_en,
            'title_ar' => $data->title_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
            'meta_name_en' => $data->meta_name_en,
            'meta_name_ar' => $data->meta_name_ar,
            'meta_description_en' => $data->meta_description_en,
            'meta_description_ar' => $data->meta_description_ar,
            'meta_keywords_en' => $data->meta_keywords_en,
            'meta_keywords_ar' => $data->meta_keywords_ar,
            'slug' => $data->slug,
        ]);
    }


    public function updateSection($id, BlogCategoryData $data, BlogCategoryRequest $request): void
    {
        $blog = BlogCategory::findOrFail($id);



        $updateData = [
            'title_en' => $data->title_en,
            'title_ar' => $data->title_ar,
            'description_en' => $data->description_en,
            'description_ar' => $data->description_ar,
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


    public function deleteSection($id): void
    {
        $blog = BlogCategory::findOrFail($id);

        $blog->delete();
    }
}
