<?php

namespace App\Http\Requests\Dashboard\Service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceGroupRequest extends FormRequest
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
        ];
    }

    public function messages(): array
    {
        return [
            'name_en.required' => 'The name in English is required.',
            'name_en.string' => 'The name in English must be a valid string.',
            'name_en.max' => 'The name in English may not be greater than 255 characters.',
            'name_ar.required' => 'The name in Arabic is required.',
            'name_ar.string' => 'The name in Arabic must be a valid string.',
            'name_ar.max' => 'The name in Arabic may not be greater than 255 characters.',
            'description_en.required' => 'The description in English is required.',
            'description_ar.required' => 'The description in Arabic is required.',
        ];
    }
}
