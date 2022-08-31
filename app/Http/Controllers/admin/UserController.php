<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * UserController: add user / desactivate
 */
class UserController extends Controller
{
    public function showAdmins(){
        return view('post-login.admin.adminsList');
        // $users = User::all();
        // return view('users', ['users'=>$users]);
    }
    public function showProfessors(){
        return view('post-login.admin.professorsList');
        // $users = User::all();
        // return view('users', ['users'=>$users]);
    }
    public function showParents(){
        return view('post-login.admin.parentsList');
        // $users = User::all();
        // return view('users', ['users'=>$users]);
    }
    public function showStudents(){
        return view('post-login.admin.studentsList');
        // $users = User::all();
        // return view('users', ['users'=>$users]);
    }

    public function create(){
        return view('post-login.admin.addUser');
    }


    public function store(Request $request){
        $dataOk = $request->validate([
            'name'=> 'required|min:2',
            'email'=>'email|required',
            'phone'=>"required",
            'address'=>'required|max:500',
            
        ]);
        $user = $dataOk;
        $pass = Str::random(8);
        $user['pass'] = $pass;
        $user['password'] = Hash::make($pass);
        if($request['admin']){
            $user['role'] = 'admin';
        } elseif ($request['professor']) {
            $user['role'] = 'admin';
        } elseif ($request['parent']) {
            $user['role'] = 'parent';
        } else {
            $user['role'] = 'student';
        }

        if($request->file('photo')){
            $file = $request->file('photo');
            $fileName = "user-".time().".".$file->getClientOriginalExtension();
            $path = $file->storeAs('images/users', $fileName, 'public');
            $user['photo'] = $path;
        }
        $userCreate = User::create($user);
        if($userCreate){
            //send email about created account
            return view('adminsList');
        } else{
            return back()->with("error", "Failed to create the User")->withInput();
        }
    }
}
