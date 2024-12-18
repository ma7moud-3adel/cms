<?php

namespace App\Http\Requests\Dashboard\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

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
        ];
    }
}
