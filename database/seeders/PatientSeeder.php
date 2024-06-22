<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            'first_name'=>'علی',
            'last_name'=>'قلی وند',
            'national_code'=>'5670081757',
            'user_id'=>1,
            'age'=>'28',
            'birth_date'=>'1998-11-06',
            'image'=>null,
            'phone'=>'09226295580',
            'file_code'=>'1425',
            'sex'=>1
        ]);
    }
}