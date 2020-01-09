<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_product', function (Blueprint $table) {
            $table->integer('productsId')->unsigned();
            $table->foreign('productsId')->references('productsId')->on('products');
           
            $table->integer('customersId')->unsigned();
            $table->foreign('customersId')->references('customersId')->on('customers');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer_product');
    }
}
