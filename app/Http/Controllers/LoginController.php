<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        //validasi request POST dari form login. Nama$credential sebenarnya bebas.
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //cek apakah username dan passwd di database sama atau tidak
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //Jika login berhasil
            return redirect()->intended('/mahasiswa'); //intended artinya menggunakan fitur dari middleware
        }
        //Jika login salah
        return back()->with('loginError', 'Login Gagal!'); //Kembalikan halaman beserta flash message loginError
    }

    public function logout()
    {
        //return "LOGOUT";
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
