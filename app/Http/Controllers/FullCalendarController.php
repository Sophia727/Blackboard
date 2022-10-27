<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Events;

class FullCalendarController extends Controller
{
    /**

     * Write code on Method
     *
     * @return response()
     */

    public function index(Request $request)
    {
        if($request->ajax()) {
            $data = Events::whereDate('start', '>=', $request->start)
            ->whereDate('end',   '<=', $request->end)
            ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);

        }
        return view('post-login.admin.fullCalendar');
    }


    /**
    * Write code on Method
    *
    * @return response()
    */
    public function ajax(Request $request)
    {
        switch ($request->type) {
            case 'add':
            $event = Events::create([
                'title' => $request->title,
                'start' => $request->start,
                'end' => $request->end,
            ]);
            return response()->json($event);
            break;
            case 'update':

            $event = Events::find($request->id)->update([
                'title' => $request->title,
                'start' => $request->start,
                'end' => $request->end,
            ]);
            return response()->json($event);
            break;
            case 'delete':

            $event = Events::find($request->id)->delete();
            return response()->json($event);
            break;
            default:
        # code...
            break;
        }
    }

}