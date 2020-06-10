<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductShoppingCartPivotTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_shopping_cart', function (Blueprint $table) {
			$table->bigInteger('product_id')->unsigned()->index();
			$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
			$table->bigInteger('shopping_cart_id')->unsigned()->index();
			$table->foreign('shopping_cart_id')->references('id')->on('shopping_carts')->onDelete('cascade');
			$table->primary(['product_id', 'shopping_cart_id']);
			$table->integer("quantity");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('product_shopping_cart');
	}
}
