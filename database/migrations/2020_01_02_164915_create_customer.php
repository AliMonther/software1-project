<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customersId');
            $table->string('userName',100);
            $table->string('password');
            $table->integer('phoneNumber');
            $table->string('email');
            $table->string('address');
            $table->integer('gender');
            $table->integer('age');
            $table->integer('numberOfProducts')->default('0');
            $table->integer('state')->default('1');
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
