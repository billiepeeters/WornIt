<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function shoppingcarts()
    {
        return $this->hasMany('App\Shoppingcart');
    }
}
