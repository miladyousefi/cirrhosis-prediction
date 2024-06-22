<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function do_login(LoginRequest $loginRequest){
        $loginRequest->validated();
        $credentials = $loginRequest->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return view('user.index');
        }
        return back()->withErrors([
            'username' => 'نام کاربری یا رمز عبور اشتباه است.',
        ])->withInput();
    }


    public function admin_login(){
        return view('admin-login');
    }

    public function admin_do_login(LoginRequest $loginRequest){
        $loginRequest->validated();
        $credentials = $loginRequest->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors([
            'username' => 'نام کاربری یا رمز عبور اشتباه است.',
        ])->withInput();
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
