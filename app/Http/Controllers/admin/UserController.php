<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * UserController: add user / desactivate
 */
class UserController extends Controller
{
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
            $file = "user-".time().".".$file->getClientOriginalExtension();
            $path = $file->storeAs('images/')
        }
    }
}
