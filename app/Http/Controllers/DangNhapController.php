<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DangNhapController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
            if (auth('admin')->check()) {
            $user = auth('admin')->user();
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.index');
                case 'cb_hoso':
                    return redirect()->route('cb_hoso.index');
                case 'cb_kho':
                    return redirect()->route('cb_kho.index');
            }
        }
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'account' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = $request->only(['account', 'password']);

        if (auth('admin')->attempt($credentials)) {

            $role = auth('admin')->user()->role;

            switch ($role) {
                case 'admin':
                    return redirect()->route('admin.index');
                case 'cb_hoso':
                    return redirect()->route('cb_hoso.index');
                case 'cb_kho':
                    return redirect()->route('cb_kho.index');
            }
        }

        return redirect()->back()->withErrors(['password' => __('validation.custom.login_fail')]);
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        auth('admin')->logout();
        $request->session()->regenerateToken();
        return redirect()->route('admins.login.index');
    }
}
