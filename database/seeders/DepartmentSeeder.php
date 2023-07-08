<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        Department::create([
            'department_name' => 'Web Development',
            'team_leader' => '1',
        ]);

        Department::create([
            'department_name' => 'HR',
            'team_leader' => '2',
        ]);

        // Add more department data as needed
    }
}
