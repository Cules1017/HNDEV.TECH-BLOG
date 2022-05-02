<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Component\Recusive;
use App\Menu;
use App\Post;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function getoption($idp)
    {

        $data = $this->category->all();
        $recusive = new Recusive($data);
        // 
        $html_op = $recusive->find_child($idp);
        return $html_op;
    }
    public function create()
    {
        $html_op = $this->getoption('');
        return view('admin.category.add')->with('option', $html_op);
    }

    public function index()
    {
        $data = $this->category->latest()->paginate(5);
        return view('admin.category.index')->with('category', $data);
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->parent_id = $request->input('parent_id');
        $category->slug = str_slug($request->input('name'));
        $category->save();
        return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công Danh mục!!! ')->with('link', 'category.create');
    }
    public function edit($id)
    {
        $data = $this->category->find($id);
        // echo  $data->parent_id;
        $html_op = $this->getoption($data->parent_id);

        return view('admin.category.edit')->with('category', $data)->with('option', $html_op);
    }
    public function update($id,Request $request)
    {
        $category = $this->category->find($id);
        $category->name = $request->input('name');
        $category->parent_id = $request->input('parent_id');
        $category->slug = str_slug($request->input('name'));
        $category->save();
        return view('admin.category.succes')->with('msg', 'Đã Sửa Thành Công Danh mục!!! ')->with('link', 'category.index');
    }
    public function destroy($id)
    {
        $categorydelet = $this->category->find($id)->delete();
        return view('admin.category.succes')->with('msg', 'Đã Xoa Thành Công Danh Mục!!! ')->with('link', 'category.index');
    }
    public function showfoguss($slug,$id){
        $categorypa=Category::where('parent_id',0)->get();
        $artical=Post::where('category_id',$id)->paginate(10);
        $menus=Menu::where('parent_id',0)->get();
        $nameCates=Category::where('id',$id)->get();
        foreach($nameCates as $item)
        {
            $nameCate=$item->name;
        }
        return view('showhome.showcategory')->with("LcatePa",$categorypa)->with("articals",$artical)->with("menus",$menus)->with('nameCate',$nameCate);
    }
}
