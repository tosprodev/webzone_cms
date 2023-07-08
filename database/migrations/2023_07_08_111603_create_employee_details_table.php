<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->string('caller_name')->nullable();
            $table->string('gender');
            $table->date('dob')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->text('bio')->nullable();
            $table->string('mode_of_recruitment')->nullable();
            $table->string('employee_type')->nullable();
            $table->date('company_join_on')->nullable();
            $table->string('join_designation')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('team_leader_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('current_designation_id')->nullable();
            $table->string('target')->nullable();
            $table->string('cover_img')->nullable();
            $table->time('check-in_time')->nullable();
            $table->time('check-out_time')->nullable();
            $table->integer('working_days')->nullable();
            $table->integer('allowed_casual_leave')->nullable();
            $table->integer('allowed_medical_leave')->nullable();
            $table->date('resign_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_details');
    }
}
