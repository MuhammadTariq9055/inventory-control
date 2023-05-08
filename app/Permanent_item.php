<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permanent_item extends Model
{
    //
    protected $fillable = ['status'];
    public function order()
    {
        return $this->hasOne(UserOrder::class, 'permanent_item_id');
    }
}
