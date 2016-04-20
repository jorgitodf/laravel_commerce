<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tag', function (Blueprint $table) {
<<<<<<< HEAD
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('tag_id')->unsigned();
=======
            $table->integer('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('tag_id');
>>>>>>> b004c0faa23328a95c4b8b8ff0ca86cb3084aafd
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_tag');
    }
}
