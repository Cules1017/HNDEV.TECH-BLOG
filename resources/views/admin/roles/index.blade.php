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
  @include('partials.content-header',['name'=>'Roles','key'=>'List'])

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('roles.create') }}" class="btn btn-success outline float-right m-2">Thêm <i class="fa fa-plus"></i></i> </a>
        </div>

        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên vai trò</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach($roles as $value)
              <tr>
                <th scope="row">{{ $value['id'] }}</th>

                <td>{{ $value['name'] }}</td>
                <td>{{ str_limit($value['display_name'], 100) }}</td>
                <td>
                  <a href="{{route('roles.edit',$value['id'])}}" class="btn btn-warning">Sửa <i class="fas fa-pen"></i></a>
                  <a data-url="{{ route('roles.destroy',$value['id']) }}"  class="btn btn-danger  ac_destroy">Xóa <i class="fas fa-times"></i></a>
                </td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="col-md-12">
          <p class="center">{{ $roles->links() }}</p>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection