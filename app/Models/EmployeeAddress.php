<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeAddress extends Model
{
    protected $fillable = [
        'address',
        'district',
        'state',
        'pincode',
        'country',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
