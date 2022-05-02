<?php

namespace App\Http\Controllers;

use App\Http\Requests\configRequest;
use App\setting;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function create()
    {
        return view('admin.setting.add');
    }
    public function store(configRequest $request)
    {
        $setting = new setting();
        $setting->config_key = $request->input('config_key');
        $setting->config_value = $request->input('config_value');
        $setting->type=$request->type;
        
        $setting->save();
        return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công!!! ')->with('link', 'setting.index');
    }
    public function index(){
        $data =setting::paginate(10);
        return view('admin.setting.index')->with('setting', $data);
    }
    public function edit($id)
    {   
        $setting =setting::find($id);
        return view('admin.setting.edit')->with('value',$setting);
    }
    public function update($id, configRequest $request){
        $setting = setting::find($id);
        $setting->config_key = $request->input('config_key');
        $setting->config_value = $request->input('config_value');
        
        $setting->save();
        return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công!!! ')->with('link', 'setting.index');
    }
    public function destroy($id)
    {

        $setting = setting::find($id)->delete();
        return view('admin.category.succes')->with('msg', 'Đã Xóa Thành Công Bài!!! ')->with('link', 'setting.index');
    }
}
