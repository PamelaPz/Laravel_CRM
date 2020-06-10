<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Buy
 *
 * @property int $id
 * @property string $city
 * @property string $address
 * @property int $car_id
 * @property int|null $user_id
 * @property string $date_buy
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy whereDateBuy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Buy whereUserId($value)
 * @mixin \Eloquent
 */
class Buy extends Model
{
    //
}
