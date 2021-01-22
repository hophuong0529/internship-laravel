<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 45);
            $table->string('name', 200);
            $table->string('description', 1000);
            $table->integer('category_id')->foreign()->references('id')->on('categories');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
            $table->integer('is_top');
            $table->integer('on_sale');
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
