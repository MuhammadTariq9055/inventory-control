<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumable_item extends Model
{
    //
    protected $fillable = ['status'];
    public function order()
    {
        return $this->hasOne(UserOrder::class, 'consumable_item_id');
    }
}
