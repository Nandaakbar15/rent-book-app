<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function LoginPage()
    {
        return view("Login");
    }

    public function handleLogin(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($validate)) {
            // cek apakah user status = active
            if(Auth::user()->status != 'active') {
                return redirect("login")->with('error', 'Your account is not active yet. Please contact admin!');
            }

            // return redirect()->intended(route('dashboard'));

            $request->session()->regenerate();
            if(Auth::user()->role_id == 1) {
                return redirect("dashboard");
            }

            if(Auth::user()->role_id == 2) {
                return redirect("profile");
            }
        }

        return redirect("/login")->with('error', 'Login Invalid!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
