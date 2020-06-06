<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->float('price');
            $table->unsignedBigInteger('type_products_id');
            $table->unsignedBigInteger('status_product_id')->default(false);
            $table->timestamps();

            // Clave Foránea para tipo de producto
            $table->foreign('type_products_id')->references('id')->on('type_products');
            // Clave Foránea para cambiar el estatus del producto
            $table->foreign('status_product_id')->references('id')->on('status_cars');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
