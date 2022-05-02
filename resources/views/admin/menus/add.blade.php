@extends('layouts.adminlo')

@section('title')
<title>Thêm Category</title>
@endsection

@section('content')
<div class="content-wrapper">
@include('partials.content-header',['name'=>'Menu','key'=>'Add'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <form class="m-4" method="POST" action="{{ route('menus.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên menu:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập vào tên menus">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Hãy chọn cấp cho menu:</label>
                            <select class="form-control" id="parent_id" name="parent_id">
                                <option value="0">Menu lớn(không có cha)</option>
                                {!! $option !!}
                            </select>
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