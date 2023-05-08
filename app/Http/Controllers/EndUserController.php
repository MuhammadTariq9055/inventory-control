<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\EndUser;
use App\User;
use Auth;
class EndUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::user()->role_id == 1){
            $users = EndUser::all();
        }else{
            $users = EndUser::where('added_by',Auth::user()->id)->get();
        }
        return view('admin/enduser/index',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $depts = Department::where('user_id',Auth::user()->id)->get();
        return view('admin/enduser/create',compact('depts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=new User();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role_id= 3;
        $data->save();

        $enduser=new EndUser();
        $enduser->name=$request->name;
        $enduser->user_id= $data->id;
        $enduser->added_by= Auth::user()->id;
        $enduser->department_id=$request->department;
        $enduser->email=$request->email;
        $enduser->number=$request->number;
        $enduser->password=$request->password;
        $enduser->save();

        return redirect('admin/end_user/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = EndUser::find($id);
        $depts = Department::where('user_id',Auth::user()->id)->get();
        return view('admin/enduser/edit',compact('user','depts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $enduser = EndUser::find($id);

        $data=User::find($enduser->user_id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role_id= 3;
        $data->save();

        $enduser->name=$request->name;
        $enduser->added_by= Auth::user()->id;
        $enduser->department_id=$request->department;
        $enduser->email=$request->email;
        $enduser->number=$request->number;
        $enduser->password= $request->password;
        // dd($enduser);
        $enduser->save();
        return redirect('admin/end_user/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $enduser = EndUser::find($id);
        User::find($enduser->user_id)->delete();
        $enduser->delete();
        return redirect('admin/end_user/index');
    }
}
