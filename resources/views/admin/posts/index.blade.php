@extends('layouts.adminlo')

@section('title')
<title>Danh sách danh bài đăng</title>
@endsection

@section('css')
<link href="{{asset('asset\admin\showpost.css')}}" rel="stylesheet" />
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('asset\admin\codeindex.js')}}" ></script>
@endsection

@section('content')
<div class="content-wrapper">
  @include('partials.content-header',['name'=>'Artical','key'=>'List'])

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('posts.create') }}" class="btn btn-success outline float-right m-2">Thêm <i class="fa fa-plus"></i></i> </a>
       
        </div>
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên bài viết</th>
                <th scope="col">Thumnails</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach($list as $value)
            <tr>
                <th scope="row">{{ $value->id }}</th>
                <td>{{ str_limit($value->title, 50) }}</td>
                <td> <img class="img_thum" src="{{ $value->feature_img }}" alt=""></td>
                <td>{{ optional($value->category)->name }}</td>
                <td>{{ optional($value->user)->name }}</td>
                <td>
                  <a href="{{route('posts.edit',$value['id'])}}" class="btn btn-warning" >Sửa <i class="fas fa-pen"></i></a>
                 
                  <a data-url="{{ route('posts.destroy',$value['id']) }}" href="{{route('posts.destroy',$value['id'])}}" class="btn btn-danger  ac_destroy">Xóa <i class="fas fa-times"></i></a>
                  
                  <a href="{{route('Home.articalsshow',$value->id)}}" class="btn btn-outline-info  ">Xem <i class="fas fa-eye"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- <div class="col-md-12"> -->
        <div class="col-md-12">
          <p class="">{{ $list->links() }}</p>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection