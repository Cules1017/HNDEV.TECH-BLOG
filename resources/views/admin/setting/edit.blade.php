


@extends('layouts.adminlo')

@section('title')
<title>Thêm Category</title>
@endsection


@section('content')
<div class="content-wrapper">
@include('partials.content-header',['name'=>'Slider','key'=>'Edit'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <form class="m-4" method="POST" action="{{ route('setting.update',$value->id) }}" >
                        @csrf
                        <div class="form-group">
                            <label for="config_key">config_key:</label>
                            <input type="text" value="{{$value['config_key']}}" class="form-control  @error('config_key') is-invalid @enderror" id="config_key" name="config_key" placeholder="Nhập vào tên sliders">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            @error('config_key')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if($value->type==='Text')
                        <div class="form-group">
                            <label for="config_value">config_value:</label>
                            <input type="text" value="{{$value['config_value']}}" class="form-control  @error('config_value') is-invalid @enderror" id="config_value" name="config_value" placeholder="Nhập vào tên sliders">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            @error('config_value')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @elseif($value->type==='Textarea')

                        <div class="form-group">
                            <label for="config_value">config_value:</label>
                            <textarea name="config_value" id="config_value" cols="30" rows="10" class="form-control  @error('config_value') is-invalid @enderror">{{$value['config_value']}}</textarea>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            @error('config_value')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @endif
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