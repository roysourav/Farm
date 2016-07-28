<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('food_id');
            $table->integer('month');
            $table->integer('balance');
            $table->integer('stock');
            $table->string('cost');
            $table->integer('consumption');
            $table->integer('wastage');
            $table->integer('adjustment');
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
        Schema::drop('consumptions');
    }
}
