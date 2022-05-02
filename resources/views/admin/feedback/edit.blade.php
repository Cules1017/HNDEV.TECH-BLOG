@extends('layouts.adminlo')

@section('title')
<title>Nội dung feeback</title>
@endsection

@section('content')
<div class="content-wrapper">
@include('partials.content-header',['name'=>'Feedback','key'=>'solving'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                <form class="m-4" method="POST" action="{{ route('feedback.update',$value->id) }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <h2 class="contact_title">Đóng góp ý kiến, báo lỗi</h2>
                <p class="contact_sub">Vui lòng điền nội dung bạn muốn góp ý vào form bên dưới, đội ngũ admin sẽ liên hệ với bạn sớm nhất có thể.</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Tên của bạn:</label>
                            <input readonly type="text" value="{{$value->name}}" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nhập vào tên sliders">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

                        </div>
                        <div class="form-group">
                            <label for="mail">Mail của bạn:</label>
                            <input readonly type="text" value="{{$value->mail}}" class="form-control  @error('mail') is-invalid @enderror" id="mail" name="mail" placeholder="Nhập vào tên sliders">
                           
                        </div>
                        <div class="form-group">
                            <label for="title_fb">Tiêu đề:</label>
                            <input readonly type="text" value="{{$value->title_fb}}" class="form-control  @error('title_fb') is-invalid @enderror" id="title_fb" name="title_fb" placeholder="Nhập vào tên sliders">
                            
                        </div>
                        <div class="form-group">
                            <label for="content_fb">Nội dung feeback:</label>
                            <textarea readonly name="content_fb" id="content_fb" cols="30" rows="10" class="form-control  @error('content_fb') is-invalid @enderror">{{$value->content_fb}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="img_fb">Hình ảnh mô tả:</label>
                            <div class="col-md-12 m-2">
                                <div class="row">
                                    <img src="{{ $value->img_fb }}" alt="" class="img_edit_show p-1 rounded">
                                </div>
                            </div>
                        </div>
                        @if($value->status=='Chưa xử lý')
                        <button type="submit" class="btn btn-primary"> Đã xử lý</button>
                        @endif
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