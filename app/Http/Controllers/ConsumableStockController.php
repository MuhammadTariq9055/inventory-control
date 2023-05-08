<?php

namespace App\Http\Controllers;

use App\Consumable_Stock;
use App\Consumable_item;
use Illuminate\Http\Request;
use Auth;

class ConsumableStockController extends Controller
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
        return view('admin/consumable_stock/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stac= new Consumable_Stock();
        $stac->month =$request->month;
        $stac->particular =$request->particular;
        $stac->bill_no =$request->bill_no;
        $stac->receipt =$request->receipt;
        $stac->issued =$request->issued;
        $stac->balance =$request->balance;
        $stac->remark =$request->remark;
        $stac->save();
        return redirect('admin/consumable_stock/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumable_Stock  $consumable_Stock
     * @return \Illuminate\Http\Response
     */
    public function show(Consumable_Stock $consumable_Stock)
    {
        // $sta=Consumable_Stock::all();
        // return view('admin/consumable_stock/index',compact('sta'));
        if(Auth::user()->role_id == 1){
            $consum=Consumable_item::all();
        }else{
            $consum=Consumable_item::where('user_id',auth()->user()->id)->get();
        }
        return view('admin/consumable_stock/index',compact('consum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumable_Stock  $consumable_Stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumable_Stock $consumable_Stock,$id)
    {
        $sta=Consumable_Stock::find($id);
        return view('admin/consumable_stock/edit',compact('sta'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumable_Stock  $consumable_Stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Consumable_Stock $consumable_Stock,$id)
    {
        $sta=Consumable_Stock::find($id);
        $sta->month =$request->month;
        $sta->particular =$request->particular;
        $sta->bill_no =$request->bill_no;
        $sta->receipt =$request->receipt;
        $sta->issued =$request->issued;
        $sta->balance =$request->balance;
        $sta->remark =$request->remark;
        $sta->save();
        return redirect('admin/consumable_stock/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumable_Stock  $consumable_Stock
     * @return \Illuminate\Http\Response
     */
    public function delete(Consumable_Stock $consumable_Stock,$id)
    {
        $stac=Consumable_Stock::find($id);
        $stac->delete();
        return redirect('admin/consumable_stock/index');
    }
}
