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
			$table->string('description');
			$table->string('image')->nullable();
			$table->unsignedBigInteger('type_products_id');
			$table->timestamps();

			// Clave Foránea para tipo de producto
			$table->foreign('type_products_id')->references('id')->on('type_products');
		});
	}

	public function down()
	{
		Schema::dropIfExists('products');
	}
}
