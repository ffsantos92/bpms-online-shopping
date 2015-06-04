<?php

use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function ($table) {
            $table->increments('id');
            $table->string('status');
            $table->string('consumer_email');
            $table->text('products');
            $table->string('expected_delivery_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        if (Schema::hasTable('orders')) {
            Schema::drop('orders');
        }
    }
}
