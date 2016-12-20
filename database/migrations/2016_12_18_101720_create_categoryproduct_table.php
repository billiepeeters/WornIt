<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoryproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category')->unsigned();
            $table->foreign('category')->references('id')->on('categories');
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
        Schema::dropIfExists('categoryproducts');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
