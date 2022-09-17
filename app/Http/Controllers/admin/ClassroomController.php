<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function showClassroom(){
        return "chlassroom lst";
        //return view('post-login.admin.lists.classroomList');
        // $users = User::all();
        // return view('users', ['users'=>$users]);
    }
}
