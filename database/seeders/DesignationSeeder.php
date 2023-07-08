<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationSeeder extends Seeder
{
    public function run()
    {
        $designations = [
            'Manager',
            'Supervisor',
            'Assistant',
            'Web Developer',
            // Add more designations as needed
        ];

        foreach ($designations as $designation) {
            Designation::create(['designation' => $designation]);
        }
    }
}
