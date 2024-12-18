<?php

namespace App\Http\Requests\Dashboard\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required',
            'description_ar' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'section' => 'required|string|max:255',
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
