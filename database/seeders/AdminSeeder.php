<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
        {
            User::create([
                'firstname' => 'Admin',
                'lastname' => 'Account',
                'username' => 'admin',
                'ccode' => '+91',
                'phone' => '6003690840',
                'email' => 'itstechnosol360@gmail.com',
                'emp_id' => 'EMP001',
                'usertype' => 'admin',
                'team' => 'Admin Team',
                'designation' => 'Administrator',
                'status' => 'active',
                'password' => Hash::make('12345678'),
                'user_dp' => null,
            ]);
        }


}
