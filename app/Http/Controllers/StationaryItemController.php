<?php

namespace App\Http\Controllers;

use App\Stationary_item;
use Illuminate\Http\Request;
use Auth;

class StationaryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/stationary/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stat= new Stationary_item();
        $stat->item=$request->item;
        $stat->user_id = Auth::user()->id;
        $stat->specification=$request->specification;
        $stat->qty=$request->qty;
        $stat->save();
        return redirect('admin/stationary/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stationary_item  $stationary_item
     * @return \Illuminate\Http\Response
     */
    public function show(Stationary_item $stationary_item)
    {
        if(Auth::user()->role_id == 1){
            $stat=Stationary_item::all();
        }else{
            $stat=Stationary_item::where('user_id',Auth::user()->id)->get();
        }

        return view('admin/stationary/index',compact('stat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stationary_item  $stationary_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Stationary_item $stationary_item,$id)
    {
        $stat=Stationary_item::find($id);
        return view('admin/stationary/edit',compact('stat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stationary_item  $stationary_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stationary_item $stationary_item,$id)
    {
        $station=Stationary_item::find($id);
        $station->item = $request->item;
        $stat->user_id = Auth::user()->id;
        $station->specification=$request->specification;
        $station->qty=$request->qty;
        $station->save();
        return redirect('admin/stationary/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stationary_item  $stationary_item
     * @return \Illuminate\Http\Response
     */
    public function delete(Stationary_item $stationary_item,$id)
    {
        $stat=Stationary_item::find($id);
        $stat->delete();
        return redirect('admin/stationary/index');
    }

    public function all_stationary_stock(Stationary_item $stationary_item)
    {
        if(Auth::user()->role_id == 1){
            $stat=Stationary_item::all();
        }else{
            $stat=Stationary_item::where('user_id',Auth::user()->id)->get();
        }
        return view('admin/stationary_stock/index',compact('stat'));
    }
}
