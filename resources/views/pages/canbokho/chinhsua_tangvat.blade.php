@extends('layouts.layout_canbo_kho')

@section('title','Chỉnh lỗi vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('commons.breadcrumbs',["breadcrumbs"=>[
       'Home' => 'cb_kho.index',
       'Tang vật chưa nhận' => 'cb_kho.nhan_tangvat',
       'Chỉnh ' . $tangvat->ma_tangvat => null,
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
                    Thông tin Tang Vật {{  $tangvat->ten_tangvat }}
                </div>
                <div class="panel-body">
                    @include('pages.canbokho.includes.form_tangvat',[
                        'tangvat' => $tangvat
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
