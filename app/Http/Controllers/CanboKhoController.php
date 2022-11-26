<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CanboKhoController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $cb_kho = auth('admin')->user();
        return view('pages.canbokho.index', compact(['cb_kho']));
    }

    public function danhsachTangvat()
    {
        return view('pages.canbokho.danhsach_tangvat');
    }

    public function nhanTangvat()
    {
        return view('pages.canbokho.nhan_tangvat');
    }

    public function danhsachHoso()
    {
        return view('pages.canbokho.danhsach_hoso');
    }
}
