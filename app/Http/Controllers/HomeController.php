<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permanent_item;
use App\Consumable_item;
use App\Stationary_item;
use App\Consumable_Stock;
use App\Permanent_Stock;
use App\UserOrder;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            $total_permanent= (Auth::user()->role_id == 1) ? Permanent_item::count() :  Permanent_item::where('user_id',Auth::user()->id)->count();
            $total_consumable= (Auth::user()->role_id == 1) ? Consumable_item::count() :  Consumable_item::where('user_id',Auth::user()->id)->count();
            $total_stationary= (Auth::user()->role_id == 1) ? Stationary_item::count() :  Stationary_item::where('user_id',Auth::user()->id)->count();

            $total_permanent_stock= (Auth::user()->role_id == 1) ? Permanent_item::where('status',0)->count() :  Permanent_item::where('user_id',Auth::user()->id)->where('status',0)->count();
            $total_consumable_stock= (Auth::user()->role_id == 1) ? Consumable_item::where('status',0)->count() :  Consumable_item::where('user_id',Auth::user()->id)->where('status',0)->count();
            $total_stationary_stock= (Auth::user()->role_id == 1) ? Stationary_item::where('status',0)->count() :  Stationary_item::where('user_id',Auth::user()->id)->where('status',0)->count();
            if(Auth::user()->role_id == 1){
                $pen_order = UserOrder::where('status',0)->count();
                $com_order = UserOrder::where('status',1)->count();
                $disapp_order = UserOrder::where('status',2)->count();
                $app_order = UserOrder::where('status',3)->count();

            }else{
                $pen_order = UserOrder::where('admin_id',Auth::user()->id)->where('status',0)->count();
                $com_order = UserOrder::where('admin_id',Auth::user()->id)->where('status',1)->count();
                $disapp_order = UserOrder::where('admin_id',Auth::user()->id)->where('status',2)->count();
                $app_order = UserOrder::where('admin_id',Auth::user()->id)->where('status',3)->count();
            }


        return view('admin.dashboard',compact('total_permanent','total_consumable','total_stationary','total_consumable_stock','total_permanent_stock','total_stationary_stock','pen_order','com_order','disapp_order','app_order'));
        }
        else{
            $pen_order = UserOrder::where('user_id',Auth::user()->id)->where('status',0)->count();
            $com_order = UserOrder::where('user_id',Auth::user()->id)->where('status',1)->count();
            $disapp_order = UserOrder::where('user_id',Auth::user()->id)->where('status',2)->count();
            $app_order = UserOrder::where('user_id',Auth::user()->id)->where('status',3)->count();
            return view('user.dashboard',compact('pen_order','com_order','disapp_order','app_order'));
        }

    }
}
