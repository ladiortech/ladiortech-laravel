<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\{User,Log};
use DB;
class AttendanceController extends Controller
{
    //
    public function index()
    {
    	$logs = Log::where('user_id','=',Auth::id())->select(DB::raw('sum(total_minutes) as total'),'date')->groupBy('date')->orderBy('date','desc')->get();
    	return view('admin.attendance',compact('logs'));
    }

    public function inLog(Request $request)
    {
    	$log = new Log;
    	$log->date = date('Y-m-d');
    	$log->user_id = Auth::id();
    	$log->start_time = date('Y-m-d h:i:s');
    	$log->save();
    	$user = User::where('id','=',Auth::id())->update(['status'=>1]);
    	return response($log->id,202);
    }

    public function outLog(Request $request)
    {
    	$end_time = date('Y-m-d h:i:s');

    	$log = Log::find($request->log_id);
    	$minutes = abs(strtotime($log->start_time) - strtotime($end_time)) / 60;
    	$log->end_time = $end_time;
    	$log->total_minutes = $minutes;
    	$log->description = $request->description;
    	$log->save();
    	$user = User::find(Auth::id());
    	$user->status = '0';
    	$user->save();
    	return response('success',202);
    }
    public function getLogDetails(Request $request)
    {
    	$logs = Log::where([['user_id','=',Auth::id()],['date','=',$request->date]])->get();
    	return view('admin.attendance-details',compact('logs'));
    }

    public function getUserAttendance()
    {
    	$logs = Log::where('date','=',date('Y-m-d'))->select(DB::raw('sum(total_minutes) as total'),'user_id')->groupBy('user_id')->orderBy('date','desc')->get();
    	return view('admin.user_attendance',compact('logs'));	
    }

    public function filterUserAttendance(Request $request)
    {
    	$start_date = $request->start_date;
    	$end_date = $request->end_date;
    	$logs = Log::whereIN('date',[$request->start_date, $request->end_date])->select(DB::raw('sum(total_minutes) as total'),'user_id')->groupBy('user_id')->orderBy('date','desc')->get();
    	return view('admin.user_attendance',compact('logs','start_date','end_date'));
    }
}
