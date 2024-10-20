<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() 
    {
        return view('auth.login');
    }

    public function doLogin(Request $request) 
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mencoba untuk login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika sukses, arahkan ke dashboard atau halaman sesuai role
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('success', 'Login berhasil!');
        }

        // Jika gagal login, kembali ke halaman login dengan pesan error
        return back()->with('error', 'Email atau password salah.')
                 ->onlyInput('email');
    }

    public function logout(Request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login')->with('success', 'Logout berhasil');
    }

    public function register()
    {
        return view('auth.register');
    }

}
