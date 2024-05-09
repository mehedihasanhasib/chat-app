<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->all();
        if (Auth::guard('admin')->attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password']
        ])) {
            return redirect()->route('admin.dashboard');
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
