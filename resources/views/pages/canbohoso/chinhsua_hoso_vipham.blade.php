@extends('layouts.layout_canbo_hoso')

@section('title','Tạo hồ sơ vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        @include('commons.breadcrumbs',["breadcrumbs"=>[
       'Home' => 'cb_hoso.index',
       'Hồ sơ' => 'cb_hoso.ho_so_vipham',
       'Chỉnh sửa hồ sơ vi phạm: ' . $hoso->ma_hoso => null
       ]])
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
                Chỉnh Sửa Hồ Sơ Vi Phạm: {{ $hoso->ma_hoso }}
            </div>
            <div class="panel-body">
                @include('pages.canbohoso.includes.form_hoso', [
                    'danhmucloi' => $danhmucloi,
                    'canboLapbb' => $canboLapbb,
                    'hoso' => $hoso,
                    'nguoivipham' => $nguoivipham,
                    'danhsachTangvat' => $danhsachTangvat,
                    'chitietHoso' => $chitietHoso,
                ])
            </div>
        </div>
    </div>
@endsection


