


@extends('layouts.adminlo')

@section('title')
<title>Thêm Category</title>
@endsection


@section('content')
<div class="content-wrapper">
@include('partials.content-header',['name'=>'Slider','key'=>'Add'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <form class="m-4" method="POST" action="{{ route('slider.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên slider:</label>
                            <input type="text" value="{{old('name')}}" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nhập vào tên sliders">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="descript">Descript:</label>
                            <input type="text" value="{{old('descript')}}" class="form-control  @error('descript') is-invalid @enderror" id="descript" name="descript" placeholder="Nhập vào tên sliders">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            @error('descript')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="img_patch">Ảnh:</label>
                            <input type="file" value="{{old('img_patch')}}" class="form-control-file" id="img_patch" name="img_patch">
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