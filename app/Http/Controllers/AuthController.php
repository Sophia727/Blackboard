<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function welcomepage(){
        $posts = Post::orderBy('updated_at', 'asc')->paginate(5);
        $events = Event::orderBy('updated_at', 'asc')->paginate(7);
        return view('pre-login.welcomepage', ['posts'=>$posts, 'events'=>$events]);
    }
    
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
        } elseif (Auth::user()->role =='student') {
            return redirect('/student');
        } else {
            return redirect('/login');
        }
        DB::table("users")
              ->where("id", auth()->user()->id)
              ->update(["last_sign_in_at" => now()]);
    }
    return back()->withErrors([
        'email' => 'The provided information doesn\'t match our records.',
    ])->onlyInput('email');
    }
    public function dashboardIndex(){
        return view('post-login.admin.dashboard');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
