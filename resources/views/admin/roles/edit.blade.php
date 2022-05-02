@extends('layouts.adminlo')

@section('title')
<title>Thêm Category</title>
@endsection

@section('css')
<link href="{{asset('vendors\Select2\select2.min.css')}}" rel="stylesheet" />
<link href="{{asset('asset\admin\addpost.css')}}" rel="stylesheet" />
@endsection

@section('js')
<script src="{{asset('asset\admin\checkall.js')}}" ></script>
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
    @include('partials.content-header',['name'=>'Roles','key'=>'Add'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form class="m-4" method="POST" action="{{ route('roles.update',$value->id)}}">
                        <div class="col-md-12">


                            @csrf
                            <div class="form-group">
                                <label for="name">Tên vai trò:</label>
                                <input type="text" value="{{$value['name']}}" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nhập vào tên vai trò trong trang">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name_display">Mô tả:</label>
                                <textarea class="form-control  @error('name_display') is-invalid @enderror" id="name_display" rows="5" name="name_display">{{$value['display_name']}}</textarea>
                                <!-- <small id="name_displayHelp" class="form-text text-muted">We'll never share your name_display with anyone else.</small> -->
                                @error('name_display')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>






                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for=""><input type="checkbox" class="check_all"> Chọn tất cả</label>
                                    
                                </div>
                            </div>
                        </div>
                        @foreach($parent_PID as $item)
                        <div class="col-md-12">
                            <!-- <div class="row" style="margin-left: 3px;"> -->
                            <div class="card border-primary col-md-12">
                                <div class="card-header">
                                    <label for="">
                                        <input type="checkbox" class="cb_warp" value="">
                                    </label>
                                    {{ $item->name }}
                                </div>
                                <div class="row">
                                    @foreach($item->getChild as $child)
                                    <div class="col-md-3">

                                        <div class="card-body text-primary">
                                            <label for="">
                                                <input {{ $checked->contains('id',$child->id) ? 'checked' :''}} name="permission_id[]" type="checkbox" class="cb_child" value="{{ $child->id }}">
                                            </label>
                                            {{ $child->name }}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                            <!-- </div> -->
                        </div>
                        @endforeach
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
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