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
            'phone' => 'required|string|max:15',
            'national_code' => 'nullable|string|max:10',
            'sex' => 'required|boolean',
            'Grade_1_fatty' => 'required|integer|min:0|max:1',
            'Grade_2_fatty' => 'required|integer|min:0|max:1',
            'Grade_3_fatty' => 'required|integer|min:0|max:1',
            'Hepatomegaly' => 'required|integer|min:0|max:1',
            'splenomegaly' => 'required|integer|min:0|max:1',
            'Cirrhosis_peripheral_symptoms' => 'required|integer|min:0|max:1',
            'IMT_-_R' => 'required|numeric|min:0',
            'IMT_-_L' => 'required|numeric|min:0',
            'AST' => 'required|numeric|min:0',
            'ALT' => 'required|numeric|min:0',
            'ALP' => 'required|numeric|min:0',
            'CHOLESTROL' => 'required|numeric|min:0',
            'TG' => 'required|numeric|min:0',
            'FBS' => 'required|numeric|min:0',
            'Hb' => 'required|numeric|min:0',
            'Hct' => 'required|numeric|min:0',
            'Plt' => 'required|numeric|min:0',
            'HDL' => 'required|numeric|min:0',
            'Urea' => 'required|numeric|min:0',
            'Cr' => 'required|numeric|min:0',
            'URIC_ACID' => 'required|numeric|min:0',
            'Diabetes' => 'required|integer|min:0|max:1',
            'Hyperlipidemia' => 'required|integer|min:0|max:1',
            'Hypertension' => 'required|integer|min:0|max:1',
            'Alcoholic' => 'required|integer|min:0|max:1',
            'BMI' => 'required|numeric|min:0',
            'Uniforms' => 'required|integer|min:0|max:1',
            'non_uniform' => 'required|integer|min:0|max:1',
            'RUQ_pain' => 'required|integer|min:0|max:1',
            'Vague_discomfort_RUQ' => 'required|integer|min:0|max:1',
            'Smoker' => 'required|integer|min:0|max:1',
            'Methotrexate' => 'required|integer|min:0|max:1',
            'Aspirin' => 'required|integer|min:0|max:1',
            'Glucocorticoids' => 'required|integer|min:0|max:1',
            'Calcium_channel_blockers' => 'required|integer|min:0|max:1',
            'Estrogen' => 'required|integer|min:0|max:1',
            'Tetracycline' => 'required|integer|min:0|max:1',
            'Nucleolysis_analogs' => 'required|integer|min:0|max:1',
            'Chemotherapy_drugs' => 'required|integer|min:0|max:1',
            'Tamoxifen' => 'required|integer|min:0|max:1',
        ];
    }
}