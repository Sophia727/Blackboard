<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    public function index(){
        //
    }
    public function create()
    {
        $user = DB::table('users')->where(['role'=> 'admin'])->orderBy('name', 'asc')->get(); 
        return view('post-login.admin.institution.faculty.addFaculty',['role' => $user]);
    }
    public function store(Request $request){
        $dataOk = $request->validate([
            'name' => 'required|min:2',
            'rector'=>'required'
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
            $newFaculty['created_at'] = now();
            
            return redirect()->route('institution.info')->with(["status" => "$facultyCreate->name created successfully"]);
        } else {
            return back()->with("error", "Failed to create faculty")->withInput();
        }
    }
}
