<?php

namespace App\Http\Requests\Dashboard\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'description_en' => 'required|string|max:255',
            'description_ar' => 'required|string|max:255',
            'meta_name_en' => 'nullable|max:255',
            'meta_name_ar' => 'nullable|max:255',
            'meta_description_en' => 'nullable|max:255',
            'meta_description_ar' => 'nullable|max:255',
            'meta_keywords_en' => 'nullable|max:255',
            'meta_keywords_ar' => 'nullable|max:255',
            'slug' => 'nullable|max:255',
        ];
    }
}
