<?php

namespace App\Utils;

use App\Product;
use App\ShoppingCart;
use App\User;
use Illuminate\Support\Collection;

class ShoppingCartUtil
{
	private $user;

	/**
	 *
	 *
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	public function getCart()
	{
		return ShoppingCart::whereUserId($this->user->id);
	}

	public function getCartProducts(): Collection
	{
		$shoppingCart = $this->getCart();

		return $shoppingCart->products;
	}

	public function addProduct($product_id, $qty)
	{
		$products = $this->user->shoppingCart->products;

		if ($products->contains(Product::find($product_id))) {
			return $this->user->shoppingCart->products()->sync([$product_id => ['quantity' => $qty]]);
		}

		return $this->user->shoppingCart->products()->attach($product_id, ['quantity' => $qty]);
	}

	public function deleteProduct($product_id)
	{
		return $this->user->shoppingCart->products()->detach($product_id);
	}

	public function empty()
	{
		return $this->user->shoppingCart->products()->detach();
	}
}
