<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('category_id');
             $table->Integer('user_id');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_price');
            $table->string('product_image');
            $table->string('product_status');
            $table->string('product_serial',191)->unique();

            //$table->unique(['id','product_serial']);
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
        Schema::dropIfExists('products');
    }
}
