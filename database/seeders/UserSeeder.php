<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name'=>'میلاد',
            'last_name'=>'یوسفی',
            'username'=>'milad',
            'phone'=>'09226295580',
            'email'=>'milad@gmail.com',
            'password'=>Hash::make('milad')
        ]);
    }
}
