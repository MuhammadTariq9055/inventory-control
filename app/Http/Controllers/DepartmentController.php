<?php

namespace App\Http\Controllers;

use App\Department;
use Auth;
use Illuminate\Http\Request;

class DepartmentController extends Controller
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
        return view('admin/department/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Department();
        $data->did=$request->did;
        $data->user_id= Auth::user()->id;
        $data->dname=$request->dname;
        $data->save();
        return redirect('admin/department/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        if(Auth::user()->role_id == 1){
            $dep=Department::all();
        }else{
            $dep=Department::where('user_id',Auth::user()->id)->get();
        }

        return view('admin/department/index',compact('dep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department,$id)
    {
        $dep=Department::find($id);
        return view('admin/department/edit',compact('dep'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $dep=Department::find($id);
        // $dep->did=$request->did;
        $dep->user_id= Auth::user()->id;
        $dep->dname=$request->dname;
        $dep->save();
        return redirect('admin/department/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function delete(Department $department,$id)
    {
        $dep=Department::find($id);
        $dep->delete();
        return redirect('admin/department/index');
    }
}
