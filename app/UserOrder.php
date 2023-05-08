<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    //
    protected $fillable = ['status','comment','supply','main_store_entry','deptt_stock_entry'];
    public function permanent()
    {
        return $this->belongsTo(Permanent_item::class, 'permanent_item_id');
    }
    public function consumable()
    {
        return $this->belongsTo(Consumable_item::class, 'consumable_item_id');
    }
    public function stationary()
    {
        return $this->belongsTo(Stationary_item::class, 'stationary_item_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function admin()
    {
        return $this->belongsTo(User::class,'admin_id');
    }
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
