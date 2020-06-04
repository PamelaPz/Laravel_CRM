<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();

            // Clave Foránea para obtener el id del producto
            $table->foreign('product_id')->references('id')->on('products');
            // Clave Foránea para obtener el id del usuario
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
