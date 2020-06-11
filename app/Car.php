<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Car
 *
 * @property int $id
 * @property int $quantity
 * @property int $product_id
 * @property int $usuario_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Car whereUsuarioId($value)
 * @mixin \Eloquent
 */
class Car extends Model
{
    //
}
