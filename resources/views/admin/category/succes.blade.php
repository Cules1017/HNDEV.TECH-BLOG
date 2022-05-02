@extends('layouts.adminlo')
<head>

    <meta http-equiv="refresh" content="1; url={{ route($link) }}">
</head>
@section('title')
<title>Danh sách danh mục</title>
@endsection

@section('content')
<div class="content-wrapper">

    <div class="container">
        <div class="text-xs-center display-3">
            <div class="alert alert-success" role="alert">
                {{ $msg }}
            </div>
        </div>
    </div>
</div>
@endsection