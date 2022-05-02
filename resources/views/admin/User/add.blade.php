


@extends('layouts.adminlo')

@section('title')
<title>Thêm Category</title>
@endsection

@section('css')
<link href="{{asset('vendors\Select2\select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('asset\admin\addpost.css')}}" rel="stylesheet" />
@endsection

@section('js')
<script src="{{asset('vendors\Select2\select2.min.js')}}"></script>
<script>
     $(".select_user").select2({
        placeholder: 'Chọn danh vai trò trong trang',
        allowClear: true
    });
</script>
@endsection

@section('content')
<div class="content-wrapper">
@include('partials.content-header',['name'=>'Slider','key'=>'Add'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <form class="m-4" method="POST" action="{{ route('user.store')}}" >
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input type="text" value="{{old('name')}}" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nhập vào tên sliders">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" value="{{old('email')}}" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Nhập vào tên sliders">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input name="password" id="password"  class="form-control  @error('password') is-invalid @enderror" value="{{old('password')}}"></input>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="roles">Vai trò:</label>
                            <select name="roles[]" id="roles" class="form-control select_user" multiple>
                                @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('roles')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
@endsection