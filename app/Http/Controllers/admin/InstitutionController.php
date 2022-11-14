<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstitutionController extends Controller
{
    public function institutionInfo(){
        $faculty= Faculty::all();
        return view('post-login.admin.institutionFile', ['faculty'=>$faculty]);
    }
    public function reportsInfo(){
        return view('post-login.admin.reports');
    }

}
