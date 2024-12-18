<?php

namespace App\Http\Requests\Dashboard\Shared;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'clientCategory_id' => 'required|numeric',
            'link' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
        ];
    }
}
