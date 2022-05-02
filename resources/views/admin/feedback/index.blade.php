@extends('layouts.adminlo')

@section('title')
<title>Danh sách Feedback</title>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('asset\admin\codeindex.js')}}" ></script>
@endsection

@section('content')
<div class="content-wrapper">
@include('partials.content-header',['name'=>'Feedback','key'=>'List'])

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Trang thái</th>
                <th scope="col">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach($fb as $value)
              <tr>
                <th scope="row">{{ $value['id'] }}</th>
                <td>{{ $value['name'] }}</td>
                <td>{{str_limit($value->title_fb, 50)}}</td>
                <td style="color: {{$value->status=='Chưa xử lý'?'red':'blue' }};">{{ $value->status}}</td>
                <td>
                    @if($value->status=='Chưa xử lý')
                  <a href="{{route('feedback.edit',$value['id'])}}" class="btn btn-warning" >Xử lý <i class="fas fa-hammer"></i></a>
                  @else
                  <a href="{{route('feedback.edit',$value['id'])}}" class="btn btn-outline-info" >Xem <i class="fas fa-eye"></i></a>
                  @endif
                </td>
                
              </tr>
             @endforeach 
            </tbody>
          </table>
        </div>
        <div class="col-md-12">
            <p class="center">{{ $fb->links() }}</p>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
@endsection