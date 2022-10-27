<?php

namespace App\Http\Controllers\professor;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradesController extends Controller
{
    public function index(){
        return view('post-login.users.professor.allGrades');
    }
    public function create(){   
        return view('post-login.professor.addGrades');
    }

    public function store( Request $request){
        $dataOk = $request->validate([
            'name' => 'required|min:2',
            'tag'=>'required|min:2',
            'file'=>'required'
        ]);
        $dataOk['author_id']= Auth::user()->id;
        $newReport= $dataOk;
        $fileTag= $newReport['tag'];
        if($request->file('file')){
            $file = $request->file('file');
            $fileName = $fileTag."-".date("d-m-Y H:i").".".$file->getClientOriginalExtension();
            
            $path = $file->storeAs('files/reports', $fileName, 'public');
            $newReport['file'] = $path;
        }
        $createReport = Report::create($newReport);
        if ($createReport) {
            return redirect()->route('reports.list')->with(["message" => "$createReport->name uploaded successfully"]);
        } else {
            return back()->with("error", "Failed to upload report")->withInput();
        }
    }
}
