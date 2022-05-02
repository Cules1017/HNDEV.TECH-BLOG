<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Post;
use App\Slider;
use App\tags;
use App\User;
use App\setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $slider= Slider::latest()->get();
        $categorypa=Category::where('parent_id',0)->get();
        $menus=Menu::where('parent_id',0)->get();
        $artical=Post::latest()->paginate(10);
      	$setting=setting::all();
        return view('showhome.index')->with("slider",$slider)->with("LcatePa",$categorypa)->with("articals",$artical)->with("menus",$menus)->with('config',$setting);
    }
    public function articalsshow($id){
        $categorypa=Category::where('parent_id',0)->get();
        $artical=Post::find($id);
        $menus=Menu::where('parent_id',0)->get();
        $offer=Post::inRandomOrder()->limit(3)->get();
        $user=User::find($artical->admin_id);
     	 $setting=setting::all();
        return view('showhome.show')->with("artical",$artical)->with("menus",$menus)->with("LcatePa",$categorypa)->with("username",$user->name)->with('config',$setting)->with('ofer',$offer);
    }
  public function search(Request $request){
        $categorypa=Category::where('parent_id',0)->get();
        $menus=Menu::where('parent_id',0)->get();
  		$setting=setting::all();
        $tagid=tags::where('name',$request->content_search)->get();
    	$list=Post::where('id',0)->get();
        foreach($tagid as $item){
            $list=$item->post;
        }
        return view('showhome.showmenu')->with("articals",$list)->with("menus",$menus)->with("LcatePa",$categorypa)->with("namemenu",$request->content_search)->with('config',$setting);
        
    }
    public function aboutus(){
        $categorypa=Category::where('parent_id',0)->get();
        $artical=Post::where('title','Giới Thiệu')->first();
        $menus=Menu::where('parent_id',0)->get();
     	 $setting=setting::all();
        return view('showhome.aboutus')->with("artical",$artical)->with("menus",$menus)->with("LcatePa",$categorypa)->with('config',$setting);
    }
    
    public function menushow($menu){
        $categorypa=Category::where('parent_id',0)->get();
        $menus=Menu::where('parent_id',0)->get();
  		$setting=setting::all();
        $tagid=tags::where('name',$menu)->get();
        $offer=Post::inRandomOrder()->limit(5)->get();
    	$list=Post::where('id',0)->get();
        foreach($tagid as $item){
            $list=$item->post;
        }
        return view('showhome.showtomenu')->with("articals",$list)->with("menus",$menus)->with("LcatePa",$categorypa)->with('menuname',$menu)->with('config',$setting);
    }
// 
}
