<?php

namespace App\Http\Controllers;

use App\Consumable_item;
use Illuminate\Http\Request;
use Auth;

class ConsumableItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.consumable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data= new Consumable_item();
        $data->item_name=$request->item_name;
        $data->user_id= auth()->user()->id;
        $data->specification=$request->specification;
        $data->bal_per_register=$request->bal_per_register;
        $data->page_no=$request->page_no;
        $data->qty=$request->qty;
        $data->phy_found=$request->phy_found;
        $data->short_item=$request->short_item;
        $data->excess_item=$request->excess_item;
        $data->remark=$request->remark;
        $data->batch=$request->batch;
        $data->save();
        return redirect('admin/consumable/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumable_item  $consumable_item
     * @return \Illuminate\Http\Response
     */
    public function show(Consumable_item $consumable_item)
    {
        if(Auth::user()->role_id == 1){
            $consum=Consumable_item::all();
        }else{
            $consum=Consumable_item::where('user_id',auth()->user()->id)->get();
        }

        return view('admin/consumable/index',compact('consum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumable_item  $consumable_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumable_item $consumable_item,$id)
    {
        $item=Consumable_item::find($id);
        return view('admin/consumable/edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumable_item  $consumable_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $item=Consumable_item::find($id);
        $item->item_name=$request->item_name;
        $item->user_id= auth()->user()->id;
        $item->specification=$request->specification;
        $item->bal_per_register=$request->bal_per_register;
        $item->page_no=$request->page_no;
        $item->qty=$request->qty;
        $item->phy_found=$request->phy_found;
        $item->short_item=$request->short_item;
        $item->excess_item=$request->excess_item;
        $item->remark=$request->remark;
        $item->batch=$request->batch;
        $item->save();
        return redirect('admin/consumable/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumable_item  $consumable_item
     * @return \Illuminate\Http\Response
     */
    public function delete(Consumable_item $consumable_item,$id)
    {
        $consumable=Consumable_item::find($id);
        $consumable->delete();
        return view('admin/consumable/index');
    }
}
