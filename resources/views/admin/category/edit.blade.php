@extends('layouts.adminlo')

@section('title')
<title>Sửa Category</title>
@endsection

@section('content')
<div class="content-wrapper">
@include('partials.content-header',['name'=>'Category','key'=>'Edit'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <form class="m-4" method="POST" action="{{ route('category.update',$category->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên danh mục:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $category['name'] }}" placeholder="Nhập vào tên danh mục">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Hãy chọn cấp cho danh mục:</label>
                            <select class="form-control" id="parent_id" name="parent_id">
                                <option value="0">Danh mục lớn(không có cha)</option>
                                {!! $option !!}
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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