<?php

namespace App\Http\Controllers\professor;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ProfessorController extends Controller
{
    public function index(){
        return view('post-login.users.professor.dashboard');
    }
}
