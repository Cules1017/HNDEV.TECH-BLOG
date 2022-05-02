@extends('layouts.adminlo')

@section('title')
<title>Thêm Bài Viết</title>
@endsection

@section('css')
<link href="{{asset('vendors\Select2\select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('asset\admin\addpost.css')}}" rel="stylesheet" />
@endsection

@section('content')
<div class="content-wrapper">
    @include('partials.content-header',['name'=>'Artical','key'=>'Add'])

    <!-- Main content -->
    <form class="m-4" method="POST"  action="{{ route('posts.update',$value['id']) }}" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">



                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Danh mục:</label>
                            <select class="form-control tags_select_cate" id="category_id" name="category_id">
                                <option value="0">Chọn danh mục</option>
                                {{!!$option!!}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Tiêu đề:</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Nhập vào tiêu đề" value="{{ $value->title }}">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Tóm tắt:</label>
                            <textarea class="form-control" id="subtitle" name="subtitle" rows="3">{{ $value->subtitle }}</textarea>
                        </div>

                        <div class="form-group ">
                            <label for="feature_img ">Ảnh:</label>
                            <div class="col-md-12 m-2">
                                <div class="row">
                                    <img src="{{ $value->feature_img }}" alt="" class="img_edit_show p-1 rounded">
                                </div>
                            </div>
                            <input type="file" class="form-control-file" placeholder="Chọn ảnh khác" id="feature_img" name="feature_img" value="{{$value->img_name}}">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="url_social">Liên kết bài viết tới facebook(nếu có):</label>
                            <input type="text" class="form-control " id="title" value="{{$value->url_social}}" name="url_social" placeholder="Liên kết bài viết tới facebook">
                            
                        </div>



                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="content">Bài viết:</label>
                                <textarea name="content" class="form-control tynymce_editor" rows="20">{{ $value->content }}</textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tags">tags:</label>
                            <select class="form-control tags_select" id="tags_select" multiple="multiple" name="tags[]">
                                @foreach($value->tags as $item)
                                <option value="{{ $item->name }}" selected>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div><button type="submit" class="btn btn-primary">Thêm</button>
                    </div>


                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

    </form>
    <!-- /.content -->
</div>
@endsection
<!-- JS -->
@section('js')
<script>
    document.foo.submit();
</script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{asset('vendors\Select2\select2.min.js')}}"></script>

<script src="{{asset('asset\admin\addpost.js')}}"></script>
@endsection