<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SalaryDetail;

class SalaryDetailSeeder extends Seeder
{
    public function run()
    {
        SalaryDetail::create([
            'basic' => 50000,
            'hra' => 10000,
            'ta' => 5000,
            'da' => 2000,
            'incentive' => 3000,
            'ptax' => 1000,
            'advance' => 5000,
            'lop' => 0,
            'tds' => 5000,
            'con' => 0,
            'earnings' => 60000,
            'deduction' => 10000,
            'paid_days' => 26,
            'leave' => 4,
            'month' => 'July',
            'year' => '2023',
            'pay_date' => '2023-07-31',
            'paymode' => 'Bank Transfer',
            'due' => 0,
            'uid' => 1,
        ]);

        // Add more salary details as needed
    }
}
