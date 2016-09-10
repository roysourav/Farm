<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('img');
            $table->string('mobile');
            $table->string('a_mobile');
            $table->string('email');
            $table->text('address');
            $table->string('account_name');
            $table->string('account_no');
            $table->string('a_account_no');
            $table->string('bank_name');
            $table->string('branch_name');
            $table->text('agreement');
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
        Schema::drop('customers');
    }
}
