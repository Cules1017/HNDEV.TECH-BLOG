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
    <form class="m-4" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">



                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Danh mục:</label>
                            <select class="form-control tags_select_cate @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                <option disabled selected value> -- Chọn danh mục -- </option>
                                {{!!$option!!}}
                            </select>
                            @error('category_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">Tiêu đề:</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title')}}" name="title" placeholder="Nhập vào tiêu đề">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Tóm tắt:</label>
                            <textarea class="form-control @error('subtitle') is-invalid @enderror"  id="subtitle" name="subtitle" rows="3">{{old('subtitle')}}</textarea>
                            @error('subtitle')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="feature_img">Ảnh:</label>
                            <input type="file" class="form-control-file @error('feature_img') is-invalid @enderror" id="feature_img" name="feature_img">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            @error('feature_img')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="url_social">Liên kết bài viết tới facebook(nếu có):</label>
                            <input type="text" class="form-control " id="title" value="{{old('url_social')}}" name="url_social" placeholder="Liên kết bài viết tới facebook">
                            
                        </div>




                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="content">Bài viết:</label>
                                <textarea name="content"  class="form-control tynymce_editor @error('content') is-invalid @enderror" rows="20">{{old('content')}}</textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tags">tags:</label>
                            <select class="form-control tags_select" id="tags_select" multiple="multiple" name="tags[]">
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
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{asset('vendors\Select2\select2.min.js')}}"></script>

<script src="{{asset('asset\admin\addpost.js')}}"></script>
@endsection