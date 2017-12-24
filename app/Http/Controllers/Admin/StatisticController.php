<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Statistic;
use Illuminate\Http\Request;
use Session;

class StatisticController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Functions For About US
    public function index(){
    	$statistic = Statistic::first();

    	return view('admin.statistic.update',compact('statistic'));
    }

    public function updateStatistic(Request $request){
    	$this->validate($request,[
                'years' => 'required',
                'agents' => 'required',
                'success' => 'required',
                'jobs' => 'required',
                
            ],[  
                'years.required' => 'يجب أن تقوم بإدخال عدد سنوات الخبرة رجاءً',
                'agents.required' => 'يجب أن تقوم بإدخال عدد العملاء الذين تمت خدمتهم رجاءً',
                'success.required' => 'يجب أن تقوم بإدخال عدد الحالات الناجحة رجاءً',
                'jobs.required' => 'يجب أن تقوم بإدخال عدد الوظائف التي تمت في المكتب رجاءً',
            ]);

    	$statistic = Statistic::first();

    	$statistic->years = $request->years;
    	$statistic->agents = $request->agents;
    	$statistic->success = $request->success;
    	$statistic->jobs = $request->jobs;

    	$statistic->save();

    	Session::flash('success', 'تمت تحديث بيانات الاحصائيات بنجاح بنجاح');
        return redirect()->back();
    }
}
