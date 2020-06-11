<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property int $type_products_id
 * @property int $status_product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ShoppingCart[] $shoppingCarts
 * @property-read int|null $shopping_carts_count
 * @property-read \App\StatusCar $status_product
 * @property-read \App\TypeProduct $type_products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereStatusProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereTypeProductsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'type_products_id',
    ];

    public function type_products()
    {
        return $this->belongsTo(TypeProduct::class);
    }

    public function shoppingCarts()
    {
        return $this->belongsToMany(ShoppingCart::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
