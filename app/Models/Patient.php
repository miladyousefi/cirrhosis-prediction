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
}
