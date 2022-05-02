@extends('layouts.adminlo')

@section('title')
<title>Danh sách danh menu</title>
@endsection




@section('css')
<link href="{{asset('asset\admin\showpost.css')}}" rel="stylesheet" />
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('asset\admin\codeindex.js')}}"></script>
@endsection

@section('content')
<div class="content-wrapper">
  @include('partials.content-header',['name'=>'Slider','key'=>'List'])

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="btn-group float-right">
            <a class="btn dropdown-toggle btn-success float-right m-2" data-toggle="dropdown" href="#">
              ADD<i class="fa fa-plus m-1"></i>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li> <a href="{{ route('setting.create').'?type=Text' }} " class="m-2">Text</a></li>
              <li> <a href="{{ route('setting.create').'?type=Textarea' }}" class="m-2">Textarea</a></li>

            </ul>
          </div>
        </div>
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Key</th>
                <th scope="col">Value</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach($setting as $value)
              <tr>
                <th scope="row">{{ $value['id'] }}</th>

                <td>{{ $value['config_key'] }}</td>
                <th>{{ str_limit($value['config_value'], 100) }}</th>
                <td>
                  <a href="{{route('setting.edit',$value['id'])}}" class="btn btn-warning">Sửa <i class="fas fa-pen"></i></a>
                  <a data-url="{{ route('setting.destroy',$value['id']) }}" href="{{route('slider.destroy',$value['id'])}}" class="btn btn-danger  ac_destroy">Xóa <i class="fas fa-times"></i></a>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="col-md-12">
          <p class="center">{{ $setting->links() }}</p>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection