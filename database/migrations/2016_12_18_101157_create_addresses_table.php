<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer')->unsigned();
            $table->foreign('customer')->references('id')->on('customers');
            $table->string('street');
            $table->integer('house_number');
            $table->integer('additional_house_number')->default();
            $table->string('city');
            $table->integer('zip_code');
            $table->string('province');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('addresses');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
