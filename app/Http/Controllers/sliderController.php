<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Traits\StorageIMGTrait;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateRequest;

class sliderController extends Controller
{
    use StorageIMGTrait;
    public function create()
    {
        return view('admin.slider.add');
    }
    public function store(ValidateRequest $request)
    {
        $data = $this->StorageTraitsUpload($request, 'img_patch', 'sliderIMG');
        $slider = new Slider();
        $slider->name = $request->input('name');
        $slider->descript = $request->input('descript');
        if (!empty($data)) {
            $slider->img_patch = $data['file_path'];
            $slider->img_name    = $data['file_name'];
        }
        $slider->save();
        return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công Slider!!! ')->with('link', 'slider.create');
    }
    public function index(){
        $data =Slider::paginate(10);
        return view('admin.slider.index')->with('slider', $data);
    }
    public function edit($id)
    {   
        $slider =Slider::find($id);
        return view('admin.slider.edit')->with('value',$slider);
    }
    public function update($id, ValidateRequest $request){
        $data = $this->StorageTraitsUpload($request, 'img_patch', 'sliderIMG');
        $slider = Slider::find($id);
        $slider->name = $request->input('name');
        $slider->descript = $request->input('descript');
        if (!empty($data)) {
            $slider->img_patch =$data['file_path'];
            $slider->img_name    = $data['file_name'];
        }
        $slider->save();
        return view('admin.category.succes')->with('msg', 'Đã Sửa Thành Công Slider!!! ')->with('link', 'slider.index');
    }
    public function destroy($id)
    {

        $slider = Slider::find($id)->delete();
        return view('admin.category.succes')->with('msg', 'Đã Xóa Thành Công Bài Slider!!! ')->with('link', 'slider.index');
    }
}
