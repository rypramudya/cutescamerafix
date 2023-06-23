<?php

namespace Database\Seeders;

use App\Models\UserModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Str;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
   
    public function run(): void
    {
        UserModel::truncate(); //usermodel mengambil nama file model
        UserModel::create([
            'user_id' => '001',
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => hash::make('admin'),
        ]);
    }
}
