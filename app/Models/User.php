<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'ccode',
        'phone',
        'email',
        'emp_id',
        'usertype',
        'team',
        'designation',
        'status',
        'password',
        'user_dp',
    ];

    // ...
}
