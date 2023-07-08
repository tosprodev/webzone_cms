<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalaryDetail extends Model
{
    protected $fillable = [
        'basic',
        'hra',
        'ta',
        'da',
        'incentive',
        'ptax',
        'advance',
        'lop',
        'tds',
        'con',
        'earnings',
        'deduction',
        'paid_days',
        'leave',
        'month',
        'year',
        'pay_date',
        'paymode',
        'due',
        'uid',
    ];
}
