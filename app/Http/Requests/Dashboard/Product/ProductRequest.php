<?php

namespace App\Http\Requests\Dashboard\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'product_category_id' => 'required|numeric',
            'price'=>'required|numeric',
            'photo' => request()->isMethod('post') ? 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048' : 'nullable|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'photos.*' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'meta_name_en' => 'nullable|max:255',
            'meta_name_ar' => 'nullable|max:255',
            'meta_description_en' => 'nullable|max:255',
            'meta_description_ar' => 'nullable|max:255',
            'meta_keywords_en' => 'nullable|max:255',
            'meta_keywords_ar' => 'nullable|max:255',
            'slug' => 'nullable|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'name_en.required' => 'The English name is required.',
            'name_en.string' => 'The English name must be a valid string.',
            'name_en.max' => 'The English name must not exceed 255 characters.',
            'name_ar.required' => 'The Arabic name is required.',
            'name_ar.string' => 'The Arabic name must be a valid string.',
            'name_ar.max' => 'The Arabic name must not exceed 255 characters.',
            'description_en.required' => 'The English description is required.',
            'description_en.string' => 'The English description must be a valid string.',
            'description_ar.required' => 'The Arabic description is required.',
            'description_ar.string' => 'The Arabic description must be a valid string.',
            'product_category_id.required' => 'The product category is required.',
            'product_category_id.numeric' => 'The product category ID must be a valid number.',
            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a valid number.',
            'photo.required' => 'The main photo is required.',
            'photo.mimes' => 'The main photo must be a file of type: jpg, png, jpeg, gif, or pdf.',
            'photo.max' => 'The main photo must not exceed 2 MB in size.',
            'photos.*.required' => 'Each additional photo is required.',
            'photos.*.mimes' => 'Each additional photo must be a file of type: jpg, png, jpeg, gif, or pdf.',
            'photos.*.max' => 'Each additional photo must not exceed 2 MB in size.',
            'meta_name_en.max' => 'The English meta name must not exceed 255 characters.',
            'meta_name_ar.max' => 'The Arabic meta name must not exceed 255 characters.',
            'meta_description_en.max' => 'The English meta description must not exceed 255 characters.',
            'meta_description_ar.max' => 'The Arabic meta description must not exceed 255 characters.',
            'meta_keywords_en.max' => 'The English meta keywords must not exceed 255 characters.',
            'meta_keywords_ar.max' => 'The Arabic meta keywords must not exceed 255 characters.',
            'slug.max' => 'The slug must not exceed 255 characters.',
        ];
    }
}
