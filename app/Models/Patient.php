<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name',
        'last_name',
        'national_code',
        'user_id',
        'age',
        'birth_date',
        'image',
        'phone',
        'file_code',
        'sex'
    ];
    public function requests(){
        return $this->hasMany(Request::class, 'patient_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($patient) {
            $patient->file_code = static::generateUniqueCode();
        });
    }

    protected static function generateUniqueCode()
    {
        do {
            $code = mt_rand(1000000, 9999999);
        } while (self::where('file_code', $code)->exists());

        return $code;
    }


}
