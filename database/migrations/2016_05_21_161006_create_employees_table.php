<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('designation');
            $table->string('img');
            $table->string('date_of_birth');
            $table->string('qualification');
            $table->string('skill');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('nid');
            $table->string('mobile');
            $table->string('e_mobile');
            $table->string('email');
            $table->text('address');
            $table->text('p_address');
            $table->string('reference');
            $table->string('disability');
            $table->string('appointment_date');
            $table->integer('monthly_salary');
            $table->string('account_name');
            $table->string('account_no');
            $table->string('bank_name');
            $table->string('branch_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
