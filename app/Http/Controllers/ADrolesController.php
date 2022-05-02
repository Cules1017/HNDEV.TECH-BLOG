<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class ADrolesController extends Controller
{
    public function create()
    {  
        $permission= new Permission();
        $parent_PID=$permission->where('parent_id',0)->get();
        return view('admin.roles.add')->with('parent_PID',$parent_PID);
    }
    public function store(Request $request)
    {
        $roles = new Role();
        $roles->name = $request->input('name');
        $roles->display_name = $request->input('name_display');
        $roles->save();
        $roles->permissions()->attach($request->permission_id);
       
        return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công!!! ')->with('link', 'roles.index');
    }
    public function index(){
        $data =Role::paginate(10);
        return view('admin.roles.index')->with('roles', $data);
    }
    public function edit($id)
    {  
        $permission= new Permission();
        $parent_PID=$permission->where('parent_id',0)->get();
        $roles =Role::find($id);
        $checked=$roles->permissions;
        // dd($checked);
        return view('admin.roles.edit')->with('value',$roles)->with('checked',$checked)->with('parent_PID',$parent_PID);
    }
    public function update($id, Request $request){
        $roles = Role::find($id);
        $roles->name = $request->input('name');
        $roles->display_name = $request->input('name_display');
        $roles->save();
        $roles->permissions()->sync($request->permission_id);
        
        return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công!!! ')->with('link', 'roles.index');
    }
    public function destroy($id)
    {

        $roles = Role::find($id)->delete();
        return view('admin.category.succes')->with('msg', 'Đã Xóa Thành Công Bài!!! ')->with('link', 'roles.index');
    }
}
