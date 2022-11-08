<?php

namespace App\Http\Controllers;

use App\Models\CanBo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $canbo;

    public function __construct(CanBo $canbo)
    {
        $this->canbo = $canbo;
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
