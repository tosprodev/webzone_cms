<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DummyUserSeeder extends Seeder
{
    public function run()
        {
            User::create([
                'firstname' => 'Md',
                'lastname' => 'Kaif',
                'username' => 'mdkaif',
                'ccode' => '+91',
                'phone' => '9875374864',
                'email' => 'diginamicwebhost@gmail.com',
                'emp_id' => 'EMP002',
                'usertype' => 'employee',
                'team' => 'Development Team',
                'designation' => 'Web Developer',
                'status' => 'active',
                'password' => Hash::make('12345678'),
                'user_dp' => null,
            ]);
        }


}
