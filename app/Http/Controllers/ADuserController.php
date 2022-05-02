<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ADuserController extends Controller
{
    public function create()
    {   
        $roles=Role::all();
        return view('admin.User.add')->with('roles',$roles);
    }
    public function store(Request $request)
    {
        $User = new User();
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password=Hash::make($request->password);
        $User->save();
        $User->roles()->attach($request->roles);
       
        return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công!!! ')->with('link', 'user.index');
    }
    public function index(){
        $data =User::paginate(10);
        return view('admin.User.index')->with('User', $data);
    }
    public function edit($id)
    {   $roles=Role::all();
        $User =User::find($id);
        return view('admin.User.edit')->with('value',$User)->with('data',$roles);
    }
    public function update($id, Request $request){
        $User = User::find($id);
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password=Hash::make($request->password);
        $User->save();
        $User->roles()->sync($request->roles);
        
        return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công!!! ')->with('link', 'user.index');
    }
    public function destroy($id)
    {

        $User = User::find($id)->delete();
        return view('admin.category.succes')->with('msg', 'Đã Xóa Thành Công Bài!!! ')->with('link', 'user.index');
    }
}
