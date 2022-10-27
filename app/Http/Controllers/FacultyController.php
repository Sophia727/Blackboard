<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    public function index(){
        $faculty= Faculty::all();
        return view('pre-login.aboutUs.faculties', ['faculty'=>$faculty]);
    }    
    /**
     * facultyProfile: pre-login function to show a faculty profile and related specialities
     *
     * @param  mixed $view
     * @param  mixed $id
     * @return void
     */
    public function facultyProfile($view, $id){
        $faculty = Faculty::find($id);
        
        // $speciality = Speciality::all();
        $specialities = $faculty->specialities;
        return view($view, ['faculty'=>$faculty , 'specialities' => $specialities]);
    }
    //post login
    // public function facultyProfile($id){
    //     $faculty = Faculty::find($id);
    //     $speciality = Speciality::all();
    //     return view('post-login.admin.institution.faculty.facultyProfile', ['faculty' => $faculty, 'speciality'=>$speciality]);
    // }
    public function create()
    {
        $user = DB::table('users')->where(['role'=> 'admin'])->orderBy('name', 'asc')->get(); 
        return view('post-login.admin.institution.faculty.addFaculty',['role' => $user]);
    }
    public function store(Request $request){
        $dataOk = $request->validate([
            'name' => 'required|min:2',
            'rector_id'=>'required',
            'logo'=>'max:10240'
        ]);
        
        $newFaculty= $dataOk;
        if ($request->file('logo')) {
            $file = $request->file('logo');
            $fileName = "faculty-".$newFaculty['name']."-". time() . "." . $file->getClientOriginalExtension();
            $path = $file->storeAs('images/logos', $fileName, 'public');
            $newFaculty['logo'] = 'storage/'. $path;
        }
        
        $facultyCreate = Faculty::create($newFaculty);
        if ($facultyCreate) {
            return redirect()->route('institution.info')->with(["message" => "$facultyCreate->name created successfully"]);
        } else {
            return back()->with("error", "Failed to create faculty")->withInput();
        }
    }
}
