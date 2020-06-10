<?php

namespace App\Utils;

use App\ShoppingCart;
use App\User;

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
		return ShoppingCart::where("user_id");
	}
}
