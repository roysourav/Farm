<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCowMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cow_medicine', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cow_id');
            $table->integer('medicine_id');
            $table->string('date');
            $table->integer('dose');
            $table->integer('days');
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
        //
    }
}
