<?php

namespace App\Http\Controllers;

use App\Category;
use App\FeedbackModel;
use App\Menu;
use App\setting;
use App\Traits\StorageIMGTrait;
use Illuminate\Http\Request;

class feedbackController extends Controller
{   use StorageIMGTrait;
    public function create(){
        $categorypa=Category::where('parent_id',0)->get();
        $menus=Menu::where('parent_id',0)->get();
     	 $setting=setting::all();
        return view('showhome.contact')->with("menus",$menus)->with("LcatePa",$categorypa)->with('config',$setting);  
    }
    public function store(Request $request){
        $data = $this->StorageTraitsUpload($request, 'img_fb', 'sliderIMG');
        $fb = new FeedbackModel();
        $fb->name= $request->input('name');
        $fb->mail = $request->input('mail');
        $fb->title_fb = $request->input('title_fb');
        $fb->content_fb = $request->input('content_fb');
        $fb->mail = $request->input('mail');
        $fb->status='Chưa xử lý';
        if (!empty($data)) {
            $fb->img_fb = $data['file_path'];
        }
        $fb->save();
        $setting=setting::all();
        return view('showhome.thanks')->with('config',$setting);
    }
    public function listshow(){
        $fb=FeedbackModel::latest()->paginate(10);
        return view('admin.feedback.index')->with('fb',$fb);
    }
    public function edit($id){
        $fb =FeedbackModel::find($id);
        return view('admin.feedback.edit')->with('value',$fb);
    }
    public function update($id){
        $fb =FeedbackModel::find($id);
        $fb->status='Đã xử lý';
        $fb->save();
        return view('admin.category.succes')->with('msg', 'Đã xử lý!!! ')->with('link', 'feedback.listlistshow');
    }
    
}
