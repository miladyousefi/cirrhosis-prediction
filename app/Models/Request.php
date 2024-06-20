<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    use HasFactory;

    protected $fillable=[
        'patient_id',
        'user_id',
        'age',
        'sex',
        'BMI',
        'Gradefatty1',
        'Gradefatty2',
        'Gradefatty3',
        'Hepatomegaly',
        'Splenomegaly',
        'Cirrhosis_peripheral_symptoms',
        'IMT_R',
        'IMT_L',
        'AST',
        'ALT',
        'ALP',
        'CHOLESTROL',
        'TG',
        'FBS',
        'Hb',
        'Hct',
        'plt',
        'HDL',
        'Urea',
        'Cr',
        'URIC_ACID',
        'Diabetes',
        'Hyperlipidemia',
        'Hypertension',
        'Alcoholic',
        'result'
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function docter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
