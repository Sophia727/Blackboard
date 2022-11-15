<?php

namespace App\Http\Controllers\professor;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Student;
use App\Models\Faculty;
use App\Models\Grades;
use App\Models\Report;
use App\Models\Speciality;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradesController extends Controller
{
    public function chooseFac(){
        $faculties = Faculty::orderBy('name', 'asc')->get();
        return view('post-login.users.professor.chooseToGrade',['faculties'=>$faculties]);
    }
        public function chooseSpec($view, $id){
            $faculty = Faculty::find($id);
        $specialities = $faculty->specialities;
        return view($view, ['faculty'=>$faculty, 'specialities' => $specialities]);
        }
    public function create(){   
        $students= User::where('role'=='student');
        return view('post-login.professor.addGrades', ['students'=>$students]);
    }


    public function addGrades($view, $id){
        $speciality= Speciality::find($id);
        $subjects = Subject::where('speciality_id', $speciality->id)->get();
        $students = User::where('role', 'student')->where('speciality_id', $speciality->id)->orderBy('name', 'asc')->get();
        return view($view, [
            'speciality'=>$speciality, 
            'subjects'=>$subjects,
            'students'=>$students,
    ]);
    }
    
    
    public function storeGrades( Request $request){
        // dd($request);
        $dataOk = $request->validate([
            'student_id' => 'required',
            'subject_id'=>'required',
            'semester'=>'required',
            'grade'=>'required|max:100',
            'message'=>'string'
        ]);
        // dd($request['student_id']);
        $dataOk['author_id']= Auth::user()->id;
        $newGrade= $dataOk;
        $storeGrade = Grades::create($newGrade);

        if ($storeGrade) {
            return back()->with(["message" => "Grades uploaded successfully"]);
        } else {
            return back()->with("error", "Failed to upload report")->withInput();
        }
    }




    public function studentGrades($view, $id){
        $student = User::find($id);
        $grades = Grades::where('student_id', $student->id)->get();
        $subjects = Subject::Where('speciality_id', $student->speciality_id)->get();
        return view($view,
        ['student'=>$student,
        'grades'=>$grades,
        'subjects'=>$subjects,
       
    ]);
}



    public function studentGradesProfile($view, $id){
        $student = User::find($id);

        $grades = Grades::where('student_id', $student->id)->get();
     $subjects = Subject::Where('speciality_id', $student->speciality_id)->get();
        return view($view,
        ['student'=>$student,
        'grades'=>$grades,
        'subjects'=>$subjects,
       
    ]);
    }
    
}
