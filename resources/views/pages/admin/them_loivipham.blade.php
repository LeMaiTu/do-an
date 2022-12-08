@extends('layouts.layout_admin')

@section('title','Thêm lỗi vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('commons.breadcrumbs',["breadcrumbs"=>[
        'Home' => 'admin.index',
        'Danh mục lỗi' => 'admin.danhmuc_loi',
        'Thêm lỗi' => null,
        ]])
        <div class="panel-body">
            <div class="panel panel-default">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {!! \Session::get('success') !!}
                    </div>
                @elseif((Session::has('error')))
                    <div class="alert alert-danger">
                        {!! \Session::get('error') !!}
                    </div>
                @endif
                <div class="panel-heading text-bold">
                    Thêm Lỗi Vi Phạm
                </div>
                <div class="panel-body">
                    @include('pages.admin.includes.form_danhmucloi',[
                        'loi' => null
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
