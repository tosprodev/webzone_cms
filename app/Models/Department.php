<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name',
        'team_leader',
    ];


    public function teamLeader()
    {
        return $this->belongsTo(User::class, 'team_leader');
    }
}
