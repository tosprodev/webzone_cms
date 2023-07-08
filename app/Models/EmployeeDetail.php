<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Department;
use App\Models\Designation;

class EmployeeDetail extends Model
{
    protected $table = 'employee_details';

    protected $fillable = [
        'Caller_name',
        'gender',
        'dob',
        'martial_status',
        'emergency_contact',
        'bio',
        'mode_of_recruitment',
        'employee_type',
        'company_join_on',
        'join_designation',
        'user_id',
        'team_leader_id',
        'department_id',
        'current_designation_id',
        'target',
        'cover_img',
        'check-in_time',
        'check-out_time',
        'working_days',
        'allowed_casual_leave',
        'allowed_medical_leave',
        'resign_at',
    ];

    public function teamLeader()
    {
        return $this->belongsTo(User::class, 'team_leader_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function currentDesignation()
    {
        return $this->belongsTo(Designation::class, 'current_designation_id');
    }
}
