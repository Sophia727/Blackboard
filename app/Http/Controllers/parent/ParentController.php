<?php

namespace App\Http\Controllers\parent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParentController extends Controller
{
    public function index(){
        return view('post-login.users.professor.dashboard');
    }
}
