<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        return view('post-login.users.student.dashboard');
    }
    // public function accessGrades($view, $id){
    //     $speciality= Speciality::find($id);
    //     $subjects = Subject::where('speciality_id', $speciality->id)->get();
    //     $students = User::where('role', 'student')->where('speciality_id', $speciality->id)->orderBy('name', 'asc')->get();
    //     // $grade= Grades::where('subject_id', $subjects)->where('student_id',$students->id)->get();
    //     return view($view, [
    //         'speciality'=>$speciality, 
    //         'subjects'=>$subjects,
    //         'students'=>$students,
    //         // 'grades'=>$grade
    // ]);
    // }
    public function accessGrades(){
        // $subjects = Subject::where('speciality_id', $speciality->id)->get();
        if(Auth::User()->speciality_id != ''){
            $authSpeciality = Auth::User()->speciality_id;
            $subjects = DB::table('subjects')->where('speciality_id', $authSpeciality->speciality_id);
            return view('post-login.users.student.accessGrades', ['subjects'=>$subjects]);
        } else {
            return view('post-login.users.student.accessGrades')->with("No Speciality has been assigned to this student.");
        }
        
        return view('post-login.users.student.accessGrades');
    }
    
}
