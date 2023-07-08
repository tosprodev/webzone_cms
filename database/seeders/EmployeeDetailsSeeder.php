<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmployeeDetail;

class EmployeeDetailsSeeder extends Seeder
{
    public function run()
    {
        // Create employee details records
        $employeeDetails = [
            [
                'caller_name' => 'John Doe',
                'gender' => 'Male',
                'dob' => '1990-01-01',
                // Add other fields as needed
            ],
            [
                'caller_name' => 'Jane Smith',
                'gender' => 'Female',
                'dob' => '1992-05-15',
                // Add other fields as needed
            ],
            // Add more employee details records as needed
        ];

        // Save the employee details records
        foreach ($employeeDetails as $data) {
            EmployeeDetail::create($data);
        }
    }
}
