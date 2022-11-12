<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\CanBo;
>>>>>>> ee85335e6a752fbb55183dc6deb45b762f031226
use Illuminate\Http\Request;

class AdminController extends Controller
{
<<<<<<< HEAD
    public function __construct()
    {
        
=======
    protected $canbo;

    public function __construct(CanBo $canbo)
    {
        $this->canbo = $canbo;
>>>>>>> ee85335e6a752fbb55183dc6deb45b762f031226
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
<<<<<<< HEAD
        
=======

>>>>>>> ee85335e6a752fbb55183dc6deb45b762f031226
        return view('pages.admin.danhsach_hoso');
    }

    public function danhmucLoi(){

        return view('pages.admin.danhmuc_loi');
    }
}
