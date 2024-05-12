<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;

class AdminLoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        $admin = Admin::where('email', $credentials['email'])->get()->first();
        // dd($admin);
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            Auth::login($admin);
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
