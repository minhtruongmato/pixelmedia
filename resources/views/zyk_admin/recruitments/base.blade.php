@extends('admin.layouts.master')
@section('content')
    <section class="content-header">
        <h1>
            Bài viết tuyển dụng
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Bài viết tuyển dụng</li>
        </ol>
    </section>

    @yield('action-content')

@endsection
@section('list-js')

@endsection
