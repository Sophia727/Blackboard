<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    public function index(){
        $report = Report::orderBy('updated_at', 'asc')->paginate(10);
        return view('post-login.admin.reportFiles.reports', ['reports' => $report]);
    }
    
    public function create()
    {   
        return view('post-login.admin.reportFiles.addReport');
    }

    public function store(Request $request){
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


    public function download(Request $request, $report){

        return Storage::download(asset("storage/".$report));
    }

    public function viewFile($id){
        //
    } 

    public function destroy($id)
    {
        $report = Report::find($id);
        if($report->delete()){
        return back()->with('status', 'report'.': '.$report->name.' deleted successfully');
        } else {
            return back()->with('status', "Oops: failed to delete $report->name ");
        }
    }
}
