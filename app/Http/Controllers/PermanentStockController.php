<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permanent_Stock;
use App\Permanent_item;
use Auth;

class PermanentStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $perm = Permanent_Stock::all();
        // return view('admin/permanent_stock/index',compact('perm'));
        // return view('permanentstocks', ['permanentstocks' => $permanentstocks]);
        if(Auth::user()->role_id == 1){
            $perm=Permanent_item::all();
        }else{
            $perm=Permanent_item::where('user_id',Auth::user()->id)->get();
        }
        return view('admin/permanent_stock/index',compact('perm'));
    }
    public function create()
    {
        return view('admin/permanent_stock/create');
    }

    /**y
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                    $request->validate([
                    'date'=> 'required',
                    'description' => 'required',
                    'qty' => 'required',
                    'unit_rate' => 'required',
                    'total' => 'required',
                    'gst' => 'required',
                    'grand_total' => 'required',
                    'supplier_name' => 'required',
                    'bill_no' => 'required',
                    'pg_no' => 'required',
                    'issu_date' => 'required',
                    'qty_issu' => 'required',
                    'name_req_deptt' => 'required',
                    'bal_after_issue' => 'required',
                    'deptt_pg_no' => 'required',
                    'folio' => 'required',
                    'remark' => 'required',
                    'auction' => 'required',

        ]);

        $permanentstock = Permanent_Stock::updateOrCreate(['id' => $request->id], [

                    'date' =>$request->date,
                    'discription' =>$request->discription,
                    'qty' =>$request->qty,
                    'unit_rate' =>$request->unit_rate,
                    'total' =>$request->total,
                    'gst' =>$request->gst,
                    'grand_total' =>$request->grand_total,
                    'supplier_name' =>$request->supplier_name,
                    'bill_no' =>$request->bill_no,
                    'pg_no' =>$request->pg_no,
                    'issu_date' =>$request->issu_date,
                    'qty_issu' =>$request->qty_issu,
                    'name_req_deptt' =>$request->name_req_deptt,
                    'bal_after_issue' =>$request->bal_after_issue,
                    'deptt_pg_no' =>$request->deptt_pg_no,
                    'folio' =>$request->folio,
                    'remark' =>$request->remark,
                    'auction' =>$request->auction,

                ]);

        return response()->json(['code'=>200, 'message'=>'Post Created successfully','data' => $permanentstock], 200);

    }

    public function update(Request $request,$id)
    {
                  $request->validate([
                    'date'  => 'required',
                    'description' => 'required',
                    'qty' => 'required',
                    'unit_rate' => 'required',
                    'total' => 'required',
                    'gst' => 'required',
                    'grand_total ' => 'required',
                    'supplier_name ' => 'required',
                    'bill_no' => 'required',
                    'pg_no' => 'required',
                    'issu_date' => 'required',
                    'qty_issu' => 'required',
                    'name_req_deptt' => 'required',
                    'bal_after_issue' => 'required',
                    'deptt_pg_no' => 'required',
                    'folio' => 'required',
                    'remark' => 'required',
                    'auction' => 'required',
        ]);

        $permanentstock = Permanent_Stock::updateOrCreate(['id' => $request->id], [
                    'date' =>$request->date,
                    'discription' =>$request->discription,
                    'qty' =>$request->qty,
                    'unit_rate' =>$request->unit_rate,
                    'total' =>$request->total,
                    'gst' =>$request->gst,
                    'grand_total' =>$request->grand_total,
                    'supplier_name' =>$request->supplier_name,
                    'bill_no' =>$request->bill_no,
                    'pg_no' =>$request->pg_no,
                    'issu_date' =>$request->issu_date,
                    'qty_issu' =>$request->qty_issu,
                    'name_req_deptt' =>$request->name_req_deptt,
                    'bal_after_issue' =>$request->bal_after_issue,
                    'deptt_pg_no' =>$request->deptt_pg_no,
                    'folio' =>$request->folio,
                    'remark' =>$request->remark,
                    'auction' =>$request->auction,
                ]);

        return response()->json(['code'=>200, 'message'=>'Stock Updated successfully','data' => $permanentstock], 200);

    }

    public function edit(Request $request,$id)
    {
       $permanentstock = Permanent_Stock::updateOrCreate(['id' => $request->id], [

                    'date' =>$request->date,
                    'discription' =>$request->discription,
                    'qty' =>$request->qty,
                    'unit_rate' =>$request->unit_rate,
                    'total' =>$request->total,
                    'gst' =>$request->gst,
                    'grand_total' =>$request->grand_total,
                    'supplier_name' =>$request->supplier_name,
                    'bill_no' =>$request->bill_no,
                    'pg_no' =>$request->pg_no,
                    'issu_date' =>$request->issu_date,
                    'qty_issu' =>$request->qty_issu,
                    'name_req_deptt' =>$request->name_req_deptt,
                    'bal_after_issue' =>$request->bal_after_issue,
                    'deptt_pg_no' =>$request->deptt_pg_no,
                    'folio' =>$request->folio,
                    'remark' =>$request->remark,
                    'auction' =>$request->auction,
          ]);

  return response()->json(['code'=>200, 'message'=>'Stock Updated successfully','data' => $permanentstock], 200);

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permanent_Stock $permanent_stock)
    {
        $permanentstock = Permanent_Stock::find($permanent_stock);

        return response()->json($permanentstock);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $permanentstock = Permanent_Stock::find($id)->delete();

      return response()->json(['success'=>'Stock Deleted successfully']);
    }
}
