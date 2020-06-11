<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TypeProduct
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $product
 * @property-read int|null $product_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProduct whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TypeProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TypeProduct extends Model
{
    //Genera una relación con el tipo de producto y obtiene una colección
    public function product()
    {
        return $this->hasMany(Product::class, 'type_products_id');
    }
}
