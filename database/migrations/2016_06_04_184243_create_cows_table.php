<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cows', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sex');
            $table->string('color');
            $table->string('img');
            $table->string('date_of_birth');
            $table->integer('percentage');
            $table->string('weight');
            $table->string('significant_sign');
            $table->integer('price');
            $table->string('date_of_purchase');
            $table->integer('supplier_id');
            $table->string('milking_channels');
            $table->string('date_of_milking');
            $table->string('date_of_dryness');
            $table->string('disease');     
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
        Schema::drop('cows');
    }
}
