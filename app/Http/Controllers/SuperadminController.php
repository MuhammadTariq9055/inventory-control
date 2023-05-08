<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permanent_item;
use App\Consumable_item;
use App\Stationary_item;
use App\EndUser;
use App\UserOrder;
use Auth;
use Mail;

class SuperadminController extends Controller
{
    public function index(){
      return view('superadmin.index');
    }
    public function getallorder()
    {
        // dd(Auth::id());
        if(Auth::user()->role_id == 1){
            $orders = UserOrder::all();
        }else{
            $orders = UserOrder::where('admin_id',Auth::id())->get();
        }

        return view('admin/order/index',compact('orders'));
    }
    public function approveOrder(Request $request)
    {
        // dd($request->all());
        $order = UserOrder::find($request->order_id);
        //for approved
        $order->update([
            'comment' => $request->comment,
            'status' => 3
        ]);
        return redirect('admin/all_order');
    }

    public function disapproveOrder(Request $request)
    {
        $order = UserOrder::find($request->order_id);
        //for approved
        $order->update([
            'comment' => $request->comment,
            'status' => 2
        ]);
        return redirect('admin/all_order');
    }
    public function completeOrder(Request $request)
    {
        $order = UserOrder::find($request->order_id);
        // sent email
        $to_name = $order->user->name;
         $to_email = $order->user->email;

        $data = array('name'=> $to_name, "body" => "your Order ".$order->item->item_name." is complete Please Check your item and confirm it");

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email)  {
            $message->to($to_email, $to_name)
                    ->subject('PAIS Order Complete');
            $message->from('pais@gmail.com','PAIS Support');
        });
        // end

        $order->update([
            'supply' => $request->supply,
            'main_store_entry' => $request->main_store_entry,
            'deptt_stock_entry' => $request->deptt_stock_entry,
            'status' => 1
        ]);

        return redirect('admin/all_order');
        // $order = UserOrder::find($request->order_id);
        //     // $order->item->update([
        //     //     'status' => 1
        //     // ]);
        // //for approved
        // $order->update([
        //     'supply' => $request->supply,
        //     'main_store_entry' => $request->main_store_entry,
        //     'deptt_stock_entry' => $request->deptt_stock_entry,
        //     'status' => 1
        // ]);

        // return redirect('admin/all_order');
    }
}
