<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Otentikasi berhasil
            return redirect()->route('halaman_selanjutnya');
        }

        // Otentikasi gagal
        return redirect()->back()->withInput()->withErrors(['email' => 'Email atau password salah.']);
    }
}