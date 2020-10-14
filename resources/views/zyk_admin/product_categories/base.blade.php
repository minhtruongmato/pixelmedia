@extends('admin.layouts.master')
@section('content')
    <section class="content-header">
        <h1>
            Danh Mục sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Danh Mục sản phẩm</li>
        </ol>
    </section>

    @yield('action-content')

@endsection
@section('list-js')

@endsection
