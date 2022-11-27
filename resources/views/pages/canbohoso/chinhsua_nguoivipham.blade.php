@extends('layouts.layout_canbo_hoso')

@section('title','Chỉnh lỗi vi phạm')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
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
                    Thông tin Người Vi Phạm {{  $nguoivipham->ho_ten }}
                </div>
                <div class="panel-body">
                    @include('pages.canbohoso.includes.form_nguoivipham',[
                        'nguoivipham' => $nguoivipham
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection
