<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function findByEmail($email)
    {
        return static::where(compact('email'))->first();
    }

    public function shoppingCart()
    {
        return $this->hasOne(ShoppingCart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
