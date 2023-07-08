<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('salary_details', function (Blueprint $table) {
            $table->id();
            $table->double('basic')->nullable();
            $table->double('hra')->nullable();
            $table->double('ta')->nullable();
            $table->double('da')->nullable();
            $table->double('incentive')->nullable();
            $table->double('ptax')->nullable();
            $table->double('advance')->nullable();
            $table->double('lop')->nullable();
            $table->double('tds')->nullable();
            $table->double('con')->nullable();
            $table->double('earnings')->nullable();
            $table->double('deduction')->nullable();
            $table->integer('paid_days')->nullable();
            $table->integer('leave')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->date('pay_date')->nullable();
            $table->string('paymode')->nullable();
            $table->double('due')->nullable();
            $table->integer('uid')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salary_details');
    }
}
