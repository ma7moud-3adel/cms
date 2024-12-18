<?php

namespace App\Http\Requests\Dashboard\Shared;

use Illuminate\Foundation\Http\FormRequest;

class PhotoGallaryRequest extends FormRequest
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
            'title' => 'required|string|max:255',
//            'link' => 'required|string|max:255',
            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'photo' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
        ];
    }
}
