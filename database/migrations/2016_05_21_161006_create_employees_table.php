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
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('nid');
            $table->string('mobile');
            $table->string('email');
            $table->text('address');
            $table->string('appointment_date');
            $table->integer('monthly_salary');
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
