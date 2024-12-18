<?php

namespace App\Http\Requests\Dashboard\Setting;

use Domain\Shared\Models\Setting;
use Illuminate\Foundation\Http\FormRequest;

class SettingValidationRequest extends FormRequest
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

        // Initialize an empty array for the rules
        $rules = [];

        // Loop through each setting and apply validation based on its type
        foreach ($this->all() as $key => $value) {
            if ($key === 'category') {
                continue; // Skip category as it's not a setting
            }

            $setting = Setting::where('key', $key)->first();

            if ($setting) {

                switch ($setting->type) {
                    case 'file':
                        $rules[$key] = 'nullable|file|mimes:jpg,jpeg,png|max:2048';
                        break;
                    case 'text':
                        $rules[$key] = 'required|string|max:255';

                        break;
                    default:
                        $rules[$key] = 'required|string';
                        break;
                }
            }
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'file.mimes' => __('messages.file_mimes'),
            'file.max' => __('messages.file_max'),
            'string' => __('messages.string'),
            'max' => __('messages.max'),
            'required' => __('messages.required'),
        ];
    }
}
