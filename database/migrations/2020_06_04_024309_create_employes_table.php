<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employes');
    }
}
