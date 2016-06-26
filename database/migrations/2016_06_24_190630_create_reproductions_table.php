<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReproductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reproductions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cow_id');
            $table->string('date_of_ai');
            $table->integer('percentage');
            $table->integer('supplier_id');
            $table->integer('doctor_id');
            $table->string('date_of_check');
            $table->integer('pregnancy');
            $table->integer('preg_confirm_doctor_id');
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
        Schema::drop('reproductions');
    }
}
