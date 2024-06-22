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
            'Grade_1_fatty' => 'nullable|integer|min:0|max:1',
            'Grade_2_fatty' => 'nullable|integer|min:0|max:1',
            'Grade_3_fatty' => 'nullable|integer|min:0|max:1',
            'Hepatomegaly' => 'nullable|integer|min:0|max:1',
            'splenomegaly' => 'nullable|integer|min:0|max:1',
            'Cirrhosis_peripheral_symptoms' => 'nullable|integer|min:0|max:1',
            'IMT_-_R' => 'nullable|numeric|min:0',
            'IMT_-_L' => 'nullable|numeric|min:0',
            'AST' => 'nullable|numeric|min:0',
            'ALT' => 'nullable|numeric|min:0',
            'ALP' => 'nullable|numeric|min:0',
            'CHOLESTROL' => 'nullable|numeric|min:0',
            'TG' => 'nullable|numeric|min:0',
            'FBS' => 'nullable|numeric|min:0',
            'Hb' => 'nullable|numeric|min:0',
            'Hct' => 'nullable|numeric|min:0',
            'Plt' => 'nullable|numeric|min:0',
            'HDL' => 'nullable|numeric|min:0',
            'Urea' => 'nullable|numeric|min:0',
            'Cr' => 'nullable|numeric|min:0',
            'URIC_ACID' => 'nullable|numeric|min:0',
            'Diabetes' => 'nullable|integer|min:0|max:1',
            'Hyperlipidemia' => 'nullable|integer|min:0|max:1',
            'Hypertension' => 'nullable|integer|min:0|max:1',
            'Alcoholic' => 'nullable|integer|min:0|max:1',
            'BMI' => 'nullable|numeric|min:0',
            'Uniforms' => 'nullable|integer|min:0|max:1',
            'non_uniform' => 'nullable|integer|min:0|max:1',
            'RUQ_pain' => 'nullable|integer|min:0|max:1',
            'Vague_discomfort_RUQ' => 'nullable|integer|min:0|max:1',
            'Smoker' => 'nullable|integer|min:0|max:1',
            'Methotrexate' => 'nullable|integer|min:0|max:1',
            'Aspirin' => 'nullable|integer|min:0|max:1',
            'Glucocorticoids' => 'nullable|integer|min:0|max:1',
            'Calcium_channel_blockers' => 'nullable|integer|min:0|max:1',
            'Estrogen' => 'nullable|integer|min:0|max:1',
            'Tetracycline' => 'nullable|integer|min:0|max:1',
            'Nucleolysis_analogs' => 'nullable|integer|min:0|max:1',
            'Chemotherapy_drugs' => 'nullable|integer|min:0|max:1',
            'Tamoxifen' => 'nullable|integer|min:0|max:1',
        ];
    }
}