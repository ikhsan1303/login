<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DashboardController extends Controller
{
    public function index()
    {
        // Memeriksa apakah pengguna telah diotentikasi
        if (Auth::check()) {
            // Logika bisnis untuk halaman dashboard
            return view('dashboard.index');
        } else {
            // Redirect ke halaman login jika pengguna belum diotentikasi
            return redirect()->route('login');
        }
    }
}
