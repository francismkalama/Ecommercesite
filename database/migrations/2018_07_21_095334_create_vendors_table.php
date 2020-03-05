<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('firstname');
            $table->text('lastname');
            $table->Integer('othername');
             $table->Integer('Country');
            $table->string('location');
            $table->string('phonenumber',191)->unique();
            $table->string('description')->nullable();
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
         Schema::dropIfExists('vendors');
    }
}
