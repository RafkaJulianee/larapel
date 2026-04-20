<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role_name == 'admin') {
                return redirect()->route('/admin');
            } else {
                return redirect('/user');
            }
        }
        return redirect()->back()->with('error', 'Login Gagal');
    }
}
