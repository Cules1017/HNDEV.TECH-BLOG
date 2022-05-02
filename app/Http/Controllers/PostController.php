<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Component\Recusive;
use App\Post;
use App\Traits\StorageIMGTrait;
use Illuminate\Support\Facades\Storage;
use App\tags;
use App\tagsPost;
use DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    use StorageIMGTrait;
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
        return view('admin.posts.add')->with('option', $html_op);
    }

    public function index()
    {
        $articals=Post::paginate(10);
        return view('admin.posts.index')->with('list',$articals);
    }
    public function store(PostRequest $request)
    {
        try{
            DB::beginTransaction();
            $data = $this->StorageTraitsUpload($request, 'feature_img', 'postIMG');
            $artical = new Post();
            $artical->title = $request->input('title');
            $artical->subtitle = $request->input('subtitle');
            $artical->url_social=$request->url_social;
            $artical->content = $request->content;
            $artical->category_id = $request->category_id;
            $artical->admin_id = auth()->id();
            if (!empty($data)) {
                $artical->feature_img = $data['file_path'];
                $artical->img_name    = $data['file_name'];
            }
            $artical->save();
            if(!empty($request->tags)){
            foreach($request->tags as $value){
                $taginstance=tags::firstOrCreate(['name'=>$value]);
                $tag_ids[]=$taginstance->id;
    
    
            }}
            $artical->tags()->attach($tag_ids); 
            
            
            DB::commit();
    
            return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công Bài viết!!! ')->with('link', 'posts.index');
        }
        catch(\Exception $exception){
            DB::rollback();
            Log::error('Message:loi');
        }
        //   dd($request->tags);
     
    }
    public function edit($id)
    {   
        $artical=Post::find($id);
        $html_op = $this->getoption($artical->category_id);
        return view('admin.posts.edit')->with('option', $html_op)->with('value',$artical);
    }
    public function update($id, Request $request)
    {
        try{
            DB::beginTransaction();
            $data = $this->StorageTraitsUpload($request, 'feature_img', 'postIMG');
            $artical = Post::find($id);
            $artical->title = $request->input('title');
            $artical->subtitle = $request->input('subtitle');
            $artical->url_social=$request->url_social;
            $artical->content = $request->content;
            $artical->category_id = $request->category_id;
            $artical->admin_id = auth()->id();
            if (!empty($data)) {
                $artical->feature_img = $data['file_path'];
                $artical->img_name    = $data['file_name'];
            }
            $artical->save();
            if(!empty($request->tags)){
            foreach($request->tags as $value){
                $taginstance=tags::firstOrCreate(['name'=>$value]);
                $tag_ids[]=$taginstance->id;
    
    
            }}
            $artical->tags()->sync($tag_ids); 
            
            
            DB::commit();
    
            return view('admin.category.succes')->with('msg', 'Đã Thêm Thành Công Bài viết!!! ')->with('link', 'posts.index');
        }
        catch(\Exception $exception){
            DB::rollback();
            Log::error('Message:loi');
        }
    }
    public function destroy($id)
    {

        $artical = Post::find($id)->delete();
        return view('admin.category.succes')->with('msg', 'Đã Xóa Thành Công Bài Viết!!! ')->with('link', 'posts.index');
    }
}
