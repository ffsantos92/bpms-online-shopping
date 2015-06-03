<?php

use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function ($table) {
            $table->increments('id');
            $table->string('title');
            $table->double('price', 5, 2);
            $table->integer('stock')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('products');
    }
}
