<?php

namespace App\Http\Controllers\professor;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Student;
use App\Models\Faculty;
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
        // $subjects = DB::table('')->where(['role'=> 'admin'])->orderBy('name', 'asc')->get(); 
        // $subjects = Subject::where('speciality_id', )
    }
    
    
    
    
    public function storeGrades( Request $request){
        $dataOk = $request->validate([
            // 'name' => 'required|min:2',
            // 'tag'=>'required|min:2',
            // 'file'=>'required'
        ]);
        $dataOk['author_id']= Auth::user()->id;
        $newGrades= $dataOk;
       
        $storeGrade = Report::create($newGrades);
        if ($storeGrade) {
            return redirect()->route('reports.list')->with(["message" => "Grades uploaded successfully"]);
        } else {
            return back()->with("error", "Failed to upload report")->withInput();
        }
    }
    
}
