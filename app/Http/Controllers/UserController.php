<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permanent_item;
use App\Consumable_item;
use App\Stationary_item;
use App\EndUser;
use App\UserOrder;
use App\Item;
use Auth;

class UserController extends Controller
{
    //
    public function createorder()
    {
        //
        $enduser = EndUser::where('user_id',Auth::user()->id)->first();
        $items= Item::where('user_id',$enduser->added_by)->get();
        return view('user/order/create',compact('items'));
    }
    public function postOrder(Request $request)
    {
        $admin_id = Item::find($request->item_id)->user_id;
        //dd($request->all());
        $userorder = new UserOrder();
        $userorder->user_id = Auth::user()->id;
        $userorder->item_id = $request->item_id;
        $userorder->admin_id = $admin_id;
        $userorder->description = $request->description;
        $userorder->demand = $request->demand;
        $userorder->supply = $request->supply;
        $userorder->main_store_entry = $request->main_store_entry;
        $userorder->deptt_stock_entry = $request->deppt_stock_entry;
        $userorder->purpose = $request->purpose;
        $userorder->status = 0;
        $userorder->save();

        return redirect('all_order');

    }

    public function getconsumable(Consumable_item $consumable_item)
    {
        $enduser = EndUser::where('user_id',Auth::user()->id)->first();
         $consum = Consumable_item::where('user_id',$enduser->added_by)->get();

        return view('user/consumable/index',compact('consum'));
    }
    public function getstationary(Consumable_item $consumable_item)
    {
        $enduser = EndUser::where('user_id',Auth::user()->id)->first();
         $stat=Stationary_item::where('user_id',$enduser->added_by)->get();

        return view('user/stationary/index',compact('stat'));
    }
    public function getpermanent(Consumable_item $consumable_item)
    {
        $enduser = EndUser::where('user_id',Auth::user()->id)->first();
        $perm=Permanent_item::where('user_id',$enduser->added_by)->get();

        return view('user/permanent/index',compact('perm'));
    }
    public function getallorder()
    {
        $orders = UserOrder::where('user_id',Auth::user()->id)->get();

        return view('user/order/index',compact('orders'));
    }
    public function request_consumable($id)
    {
        $admin_id = Consumable_item::find($id)->user_id;

        $userorder = new UserOrder();
        $userorder->user_id = Auth::user()->id;
        $userorder->consumable_item_id = $id;
        $userorder->admin_id = $admin_id;
        $userorder->status = 0;
        $userorder->save();

        return redirect('all_order');
    }
    public function request_stat($id)
    {
        $admin_id = Stationary_item::find($id)->user_id;

        $userorder = new UserOrder();
        $userorder->user_id = Auth::user()->id;
        $userorder->stationary_item_id = $id;
        $userorder->admin_id = $admin_id;
        $userorder->status = 0;
        $userorder->save();

        return redirect('all_order');
    }
    public function request_permament($id)
    {
        $admin_id = Permanent_item::find($id)->user_id;

        $userorder = new UserOrder();
        $userorder->user_id = Auth::user()->id;
        $userorder->permanent_item_id = $id;
        $userorder->admin_id = $admin_id;
        $userorder->status = 0;
        $userorder->save();

        return redirect('all_order');
    }
}
