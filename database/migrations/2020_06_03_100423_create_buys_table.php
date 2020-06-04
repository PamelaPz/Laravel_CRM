<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysTable extends Migration
{
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('address');
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->date('date_buy');
            $table->timestamps();

            // Clave Foránea para id de carrito
            $table->foreign('car_id')->references('id')->on('cars');
            // Clave Foránea para el dia del usuario
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('buys');
    }
}
