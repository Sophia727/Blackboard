<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecialityController extends Controller
{    
    /**
     * index : afficher dynamiquement les specialités par rapport aux facultés
     *
     * @param  mixed $view
     * @param  mixed $id
     * @return void
     */
    public function index($view, $id){
        $faculty = Faculty::find($id);
        $specialities = $faculty->specialities;
        return view($view, ['specialities' => $specialities]);
    }

    public function create()
    {
        $faculty = DB::table('faculties')->orderBy('name', 'asc')->get(); 
        $users = DB::table('users')->where(['role'=> 'professor'])->orderBy('name', 'asc')->get(); 
        return view('post-login.admin.institution.speciality.addSpeciality',['faculty' => $faculty, 'role'=>$users]);
    }
    public function store(Request $request){
        $dataOk = $request->validate([
            'name' => 'required|min:2',
            'faculty_id'=>'required',
        ]);
        
        $newSpeciality= $dataOk;

        $specialityCreate = Speciality::create($newSpeciality);
        if ($specialityCreate) {
            return redirect()->route('institution.info')->with(["message" => "$specialityCreate->name created successfully"]);
        } else {
            return back()->with("error", "Failed to create Speciality")->withInput();
        }
    }

}
