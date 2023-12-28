<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\show;
use DB;

class ShowController extends Controller
{
    public function add(Request $request)
    {
    //    $name = $request->input('name');
    //    $city = $request->input('city');
    //    $obj = new show;

    //    $obj->name = $name;
    //    $obj->city = $city;
    //    $obj->save();

    $data = $request->only(['name','city']);
     $list = show::create($data);
      return redirect('/');
    }

    public function show()
    {
        $list = show::all();
        $users = DB::select("select * from users");
       return view('show',['list'=>$list,'users'=>$users]);
    } 

    public function edit_show($id)
    {
        $show = show::find($id);
       return view('show_edit',['show'=>$show]);
    }

    public function show_update(Request $request,$id)
    {
        $show = show::find($id);
        $show->name = $request->input('name');
        $show->city = $request->input('city');
        $show->save();
        return redirect('/list');
    }

    public function delete_show($id)
    {
        $show = show::find($id);
        $show->delete();
        return redirect('/list');
    }
}

