<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', '@Master Layout'))</title>

    <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap-table.css') }}" rel="stylesheet">

    <link href="{{ asset('css/datapicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <style>
        .modal table, .modal table tr, .modal table tr td {
            border: none;
        }
    </style>
    @include('partial.admin.header')
    <div class="row">

        @include('partial.admin.sidebar')

        @yield('content')

    </div>
    @include('partial.admin.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
{{--    <script src="{{ asset('js/bootstrap.js') }}"></script>--}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src=" https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap.min.js"></script>
    @stack('scripts')
</body>
</html>
