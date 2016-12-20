<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = 'products';
}


 public function up()
    {
        {
        Schema::create('products', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->integer('sellerId');
            $table->string('image_1')->default('');
            $table->string('image_2')->default('');
            $table->string('image_3')->default('');
            $table->integer('size');
            $table->string('brand');
            $table->timestamps(); 
        });  
    }
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