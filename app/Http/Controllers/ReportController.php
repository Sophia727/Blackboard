<?php

namespace App\Http\Controllers;

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
            $fileName = $fileTag."-".time().".".$file->getClientOriginalExtension();
            $path = $file->storeAs('files/reports', $fileName, 'public');
            $post['file'] = $path;
        }
        $createReport = Report::create($newReport);
        if ($createReport) {
            return redirect()->route('reports.list')->with(["message" => "$createReport->name uploaded successfully"]);
        } else {
            return back()->with("error", "Failed to upload report")->withInput();
        }
    }
    //public function download($id){

    //$report = Report::where('id', $id)->firstOrFail();
   // $report = Report::find($id);
    //$pathToFile = storage_path('files/reports/' . $report);
    //return response()->download($pathToFile);

        //$report = Report::find($id);
        // return Storage::disk('public')->download($report->path);
        //$path= $report->getPath().$report->path;
        //return Storage::download(asset('storage/files/reports'.$report->path), $report->original_name);
        //return response()->download($path);
    
        // if(Storage::disk('public')->exists('storage/files/reports/'.$request->file)){
        //     $path=Storage::disk('public')->path('storage/files/reports/'.$request->file);
        //     $content= file_get_contents($path);
        //     return response($content)->withHeaders([
        //         'Content-Type' =>mime_content_type($path)
        //     ]);
        // } return redirect('/404');
    //}
    public function download(Request $request, $report){

        //$report = Report::where('id', $id)->firstOrFail();
        // $report = Report::find($id);

        return response()->download(public_path('/storage/files/reports/'.$report));
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
