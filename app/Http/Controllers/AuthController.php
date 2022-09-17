<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('pre-login.loginForm');
    }
    public function login(Request $request)
    {
    $info = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($info)) {
        $request->session()->regenerate();

        if(Auth::user()->role =='admin'){
            return redirect('/admin'); 
        } elseif (Auth::user()->role =='professor') {
            return redirect('/professor');
        } elseif (Auth::user()->role =='parent') {
            return redirect('/parent');
        } else {
            return redirect('/student');
        }
    }
    return back()->withErrors([
        'email' => 'The provided info does not match our records.',
    ])->onlyInput('email');
    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}