<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'file_code' => 'nullable|string|max:255',
            'age' => 'nullable|integer|min:0',
            'phone' => 'nullable|string|max:15',
            'national_code' => 'nullable|string|max:10',
            'sex' => 'required|boolean',
            'BMI' => 'nullable|numeric|min:0',
            'grade1fatty' => 'required|boolean',
            'grade2fatty' => 'required|boolean',
            'grade3fatty' => 'required|boolean',
            'hepatomegaly' => 'required|boolean',
            'splenomegaly' => 'required|boolean',
            'cirrhosisSymptoms' => 'required|boolean',
            'IMTR' => 'nullable|numeric|min:0',
            'IMTL' => 'nullable|numeric|min:0',
            'AST' => 'nullable|numeric|min:0',
            'ALT' => 'nullable|numeric|min:0',
            'ALP' => 'nullable|numeric|min:0',
            'CHOLESTROL' => 'nullable|numeric|min:0',
            'TG' => 'nullable|numeric|min:0',
            'FBS' => 'nullable|numeric|min:0',
            'Hb' => 'nullable|numeric|min:0',
            'Hct' => 'nullable|numeric|min:0',
            'plt' => 'nullable|numeric|min:0',
            'HDL' => 'nullable|numeric|min:0',
            'Urea' => 'nullable|numeric|min:0',
            'Cr' => 'nullable|numeric|min:0',
            'UricAcid' => 'nullable|numeric|min:0',
            'Diabetes' => 'required|boolean',
            'Hyperlipidemia' => 'required|boolean',
            'Hypertension' => 'required|boolean',
            'Alcoholic' => 'required|boolean',
            'Smoker' => 'required|boolean',
            'Methotrexate' => 'required|boolean',
            'Aspirin' => 'required|boolean',
            'Glucocorticoids' => 'required|boolean',
            'CalciumChannelBlockers' => 'required|boolean',
            'Estrogen' => 'required|boolean',
            'Tetracycline' => 'required|boolean',
            'NucleolysisAnalogs' => 'required|boolean',
            'ChemotherapyDrugs' => 'required|boolean',
            'Tamoxifen' => 'required|boolean',
        ];
    }
}
