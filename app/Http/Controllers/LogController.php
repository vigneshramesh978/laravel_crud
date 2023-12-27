<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\show;

class LogController extends Controller
{
    public function insert(Request $request)
    {
       $name = $request->input('name');

       DB::insert("insert into users(name) values(?)",[$name]);
      // return 'insert successfully...<a href="/">Go to back</a>';
      return redirect('/');
    } 

    public function list()
    {

       $users = DB::select("select * from users");
       return view('list',['users'=>$users]);
    } 

    public function edit($id)
    {

       $user = DB::select("select * from users where id=?",[$id]);
       return view('user_edit',['user'=>$user]);
    } 

    public function update(Request $request,$id)
    {
       $name = $request->input('name');
       $user = DB::select("update users set name=? where id=?",[$name,$id]);
       //return 'update successfully...<a href="/">Go to back</a>';
       return redirect('/list');
    }

    public function delete($id)
    {
       $user = DB::delete("delete from users where id=?",[$id]);
       return redirect('/list');
    }

   //  public function show()
   //  {
   //      $list = show::all();
   //     return view('list',['list'=>$list]);
   //  } 
}
