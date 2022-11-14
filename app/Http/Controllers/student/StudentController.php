<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Grades;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        return view('post-login.users.student.dashboard');
    }

    public function accessGrades(){
        $student = User::find(Auth::user()->id);
        $grades = Grades::where('student_id', Auth::user()->id)->get();
        return view('post-login.users.student.accessGrades'
        , ['student'=>$student, 'grades'=>$grades]
    );
    }
    
}
