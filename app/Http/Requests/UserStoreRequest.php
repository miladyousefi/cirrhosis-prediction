<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'file_code' => 'nullable|string|max:255|unique:patients,file_code',
            'age' => 'nullable|integer|min:0',
            'phone' => 'required|string|max:15|unique:patients,phone',
            'national_code' => 'nullable|string|max:10|unique:patients,national_code',
            'sex' => 'required|boolean',
        ];
    }
}