<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function institutionInfo(){
        return view('post-login.admin.institutionFile');
    }
    public function reportsInfo(){
        return view('post-login.admin.reports');
    }
}
