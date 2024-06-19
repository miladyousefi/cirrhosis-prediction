<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    use HasFactory;
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function docter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
