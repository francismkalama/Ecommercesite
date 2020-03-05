<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id');
            $table->text('cartdetails');
            $table->Integer('Noofproducts');
            $table->string('modeofcollection');
            $table->string('totalorderprice');
            $table->string('dateofpick')->nullable();
            $table->Integer('recepientid');
            $table->string('deliveryaddress')->nullable();
            $table->string('countofdelivery')->nullable();
            $table->string('townofdelivery')->nullable();
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
        Schema::drop('orders');
    }
}
