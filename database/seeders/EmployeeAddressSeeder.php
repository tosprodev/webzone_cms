<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeeAddress;

class EmployeeAddressSeeder extends Seeder
{
    public function run()
    {
        EmployeeAddress::create([
            'address' => '123 ABC Street',
            'district' => 'XYZ District',
            'state' => 'ABC State',
            'pincode' => '12345',
            'country' => 'ABC Country',
            'user_id' => 1, // Adjust the user ID based on your requirements
        ]);

        // Add more employee address data as needed
    }
}
