<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ShoppingCart
 *
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ShoppingCart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ShoppingCart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ShoppingCart query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ShoppingCart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ShoppingCart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ShoppingCart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ShoppingCart whereUserId($value)
 * @mixin \Eloquent
 */
class ShoppingCart extends Model
{
	protected $fillable = [
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function products()
	{
		return $this->belongsToMany(Product::class)
			->withPivot('quantity');
	}
}
