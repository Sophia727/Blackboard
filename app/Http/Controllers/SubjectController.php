<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function index(){
        //
    }
    public function create()
    {
        
        $user = DB::table('users')->where('role', 'professor')->orderBy('name', 'asc')->get();
        $spec= DB::table('specialities')->orderBy('name', 'asc')->get();
        return view('post-login.admin.institution.subject.addSubject',['role' => $user, 'speciality'=>$spec]);
        // dd($user);
    }
    public function store(Request $request)
    {
        
        $dataOk = $request->validate([
            'name' => 'required|min:2',
            'professor_id' => 'required',
            'speciality_id' => "required",
            'classroom_name' => 'required|min:2',
            'semester'=> 'required'
        ]);
        
        // $subject['semester'] = implode('-',$dataOk['semester']);
        // dd($dataOk['semester']);
        $subject = $dataOk;
        $subjectCreate = Subject::create($subject);
        if ($subjectCreate) {
            // $subjectCreate['semester'] = $subjectSemester 
            $subject['created_at'] = now();
            return redirect()->route('admin.dashboard')->with(["status" => "$subjectCreate->name created successfully"]);
        } else {
            return back()->with("error", "Failed to create subject: $subjectCreate")->withInput();
        }
    }
}
