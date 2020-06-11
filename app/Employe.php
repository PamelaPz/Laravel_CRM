<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Employe
 *
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property int $is_admin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Employe whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Employe extends Model
{
    //
}
