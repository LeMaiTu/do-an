@extends('layouts.layout_canbo_kho')

@section('title','Chỉnh sửa cán bộ')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('commons.breadcrumbs',["breadcrumbs"=>[
        'Home' => 'cb_kho.index',
        'Chỉnh sửa thông tin cá nhân' => null,
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
                    @include('pages.canbokho.includes.form_canbo',[
                        'canbo' => $canbo
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
