<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'Grade_1_fatty', 'Grade_2_fatty', 'Grade_3_fatty', 'Hepatomegaly', 'Splenomegaly',
        'Cirrhosis_peripheral_symptoms', 'IMT_R', 'IMT_L', 'AST', 'ALT', 'ALP', 'CHOLESTROL',
        'TG', 'FBS', 'Hb', 'Hct', 'Plt', 'HDL', 'Urea', 'Cr', 'URIC_ACID', 'Diabetes',
        'Hyperlipidemia', 'Hypertension', 'Alcoholic', 'sex', 'age', 'BMI', 'Uniforms',
        'non_uniform', 'RUQ_pain', 'Vague_discomfort_RUQ', 'Smoker', 'Methotrexate', 'Aspirin',
        'Glucocorticoids', 'Calcium_channel_blockers', 'Estrogen', 'Tetracycline', 'Nucleolysis_analogs',
        'Chemotherapy_drugs', 'Tamoxifen','patient_id','user_id','result'
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function docter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setAttribute($key, $value)
    {
        // Replace spaces with underscores
        $key = str_replace(' ', '_', $key);
        parent::setAttribute($key, $value);
    }

}