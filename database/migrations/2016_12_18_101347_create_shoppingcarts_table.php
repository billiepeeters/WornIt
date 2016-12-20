<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoppingcarts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer')->unsigned();
            $table->foreign('customer')->references('id')->on('customers');
            $table->integer('product')->unsigned();
            $table->foreign('product')->references('id')->on('products');
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
        Schema::dropIfExists('schoppingcarts');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
