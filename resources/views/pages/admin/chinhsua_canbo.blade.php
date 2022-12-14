@extends('layouts.layout_admin')

@section('title','Chỉnh sửa cán bộ')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('commons.breadcrumbs',["breadcrumbs"=>[
        'Home' => 'admin.index',
        'Cán bộ' => 'admin.danhsach_canbo',
        'Chỉnh sửa cán bộ' . $canbo->ma_canbo => null,
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
                    Thông tin của {{  $canbo->ten_canbo }}
                </div>
                <div class="panel-body">
                    @include('pages.admin.includes.form_canbo',[
                        'canbo' => $canbo
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
