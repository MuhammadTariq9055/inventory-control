<?php

namespace App\Http\Controllers;

use App\Permanent_item;
use Illuminate\Http\Request;
use Auth;

class PermanentItemController extends Controller
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
        return view('admin/permanent/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perman= new Permanent_item();
        $perman->invoice_no=$request->invoice_no;
        $perman->dop=$request->dop;
        $perman->user_id= Auth::user()->id;
        $perman->equipment=$request->equipment;
        $perman->specification=$request->specification;
        $perman->qty=$request->qty;
        $perman->stock_reg=$request->stock_reg;
        $perman->p_no=$request->p_no;
        $perman->dept_p_no=$request->dept_p_no;
        $perman->department=$request->department;
        $perman->save();
        return redirect('admin/permanent/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permanent_item  $permanent_item
     * @return \Illuminate\Http\Response
     */
    public function show(Permanent_item $permanent_item)
    {
        if(Auth::user()->role_id == 1){
            $perm=Permanent_item::all();
        }else{
            $perm=Permanent_item::where('user_id',Auth::user()->id)->get();
        }

        return view('admin/permanent/index',compact('perm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permanent_item  $permanent_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Permanent_item $permanent_item,$id)
    {
        $perm=Permanent_item::find($id);
        return view('admin/permanent/edit',compact('perm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permanent_item  $permanent_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $perm=Permanent_item::find($id);
        $perm->invoice_no=$request->invoice_no;
        $perm->dop=$request->dop;
        $perm->user_id= Auth::user()->id;
        $perm->equipment=$request->equipment;
        $perm->specification=$request->specification;
        $perm->qty=$request->qty;
        $perm->stock_reg=$request->stock_reg;
        $perm->p_no=$request->p_no;
        $perm->dept_p_no=$request->dept_p_no;
        $perm->department=$request->department;
        $perm->save();
        return redirect('admin/permanent/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permanent_item  $permanent_item
     * @return \Illuminate\Http\Response
     */
    public function delete(Permanent_item $permanent_item,$id)
    {
        $perman=Permanent_item::find($id);
        $perman->delete();
        return redirect('admin/permanent/index');
    }
}
