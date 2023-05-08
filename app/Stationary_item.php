<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stationary_item extends Model
{
    //
    protected $fillable = ['status'];
    public function order()
    {
        return $this->hasOne(UserOrder::class, 'stationary_item_id');
    }
}
