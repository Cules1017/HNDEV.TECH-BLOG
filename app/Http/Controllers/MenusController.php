<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Component\MenuRecusive;

use function GuzzleHttp\Psr7\str;

class MenusController extends Controller
{   private $menuRecusive; 
    private $menu;
    public function __construct(MenuRecusive $menurecusive, Menu $Menu)
    {
        $this->menuRecusive=$menurecusive;
        $this->menu=$Menu;
    }
    public function index(){
        $data = $this->menu->latest()->paginate(10);
        return view('admin.menus.index')->with('menu', $data);
    }
    public function create(){
       $text=$this->menuRecusive->MenuRecusiveAdd();
       return view('admin.menus.add')->with('option', $text);
    }
    public function store(Request $request){
       
        $menu = new Menu();
        $menu->name = $request->input('name');
        $menu->parent_id = $request->input('parent_id');
        $menu->slug=str_slug($request->input('name'));
        $menu->save();
        return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công Menu!!! ')->with('link', 'menus.create');
    }
    public function destroy($id){
        $menudelet = $this->menu->find($id)->delete();
        return view('admin.category.succes')->with('msg', 'Đã Xoa Thành Công Danh Menu!!! ')->with('link', 'menus.index');
    }
    public function edit($id){
        $data = $this->menu->find($id);
        $html=$this->menuRecusive->MenuRecusiveEdit($data->parent_id);
        return view('admin.menus.edit')->with('menu', $data)->with('option',$html);
    }
    public function update($id , Request $request){
        $menu = $this->menu->find($id);
        $menu->name = $request->input('name');
        $menu->parent_id = $request->input('parent_id');
        $menu->slug = str_slug($request->input('name'));
        $menu->save();
        return view('admin.category.succes')->with('msg', 'Đã Sửa Thành Công Menu!!! ')->with('link', 'menus.index');
    }
}
