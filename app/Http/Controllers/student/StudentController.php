<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        return view('post-login.users.student.dashboard');
    }
    // public function studentProfile($id){
    //     $user = User::find($id);
    //     return view('post-login.student.myProfile', ['profile'=>$user]);
    // }
    
}
