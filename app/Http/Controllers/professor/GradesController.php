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
        // $grade= Grades::where('subject_id', $subjects)->where('student_id',$students->id)->get();
        return view($view, [
            'speciality'=>$speciality, 
            'subjects'=>$subjects,
            'students'=>$students,
            // 'grades'=>$grade
    ]);
    }
    
    public function storeGrades( Request $request){
        $dataOk = $request->validate([
            'student_id' => 'required',
            'subject_id'=>'required',
            'semester'=>'required',
            'grade'=>'required|max:100',
            'message'=>'required'
        ]);
        $dataOk['author_id']= Auth::user()->id;
        $newGrade= $dataOk;
        $storeGrade = Grades::create($newGrade);
        // dd($storeGrade);

        if ($storeGrade) {
            return back()->with(["message" => "Grades uploaded successfully"]);
        } else {
            return back()->with("error", "Failed to upload report")->withInput();
        }
    }
    
}
