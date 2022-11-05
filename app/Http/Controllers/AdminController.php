<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(){
        return view('pages.admin.index');
    }

    public function danhSachCanBo(){

        return view('pages.admin.danhsach_canbo');
    }

    public function themCanBo(){

        return view('pages.admin.them_canbo');
    }

    public function danhsachHoso(){
        
        return view('pages.admin.danhsach_hoso');
    }

    public function danhmucLoi(){

        return view('pages.admin.danhmuc_loi');
    }
}
