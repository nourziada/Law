<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Partener;
use App\Said;
use App\Services;
use App\Slider;
use App\Statistic;
use App\Team;
use App\User;
use App\WebSiteContent;
use Illuminate\Http\Request;
use Notification;
use Session;

class HomeController extends Controller
{
    public function index(){
    	// Show Slider Data
    	$sliders = Slider::orderBy('created_at','desc')->get();

    	// Show AboutUs Data
    	$aboutus = WebSiteContent::where('title','aboutusOffice')->first();

    	// Show Services Title Data
    	$services = Services::orderBy('created_at','desc')->get();
    	
    	// Show Team Data
    	$teams = Team::all();

    	// Show Statistic Data
    	$statistic = Statistic::first();

    	// Show Said Data
    	$saids = Said::all();
    	$firstSaidId = Said::first()->id;

    	
    	return view('index',compact('sliders','aboutus','services','teams','statistic','saids','firstSaidId'));
    }

    public function about(){
    	// Show AboutUs Data
    	$aboutusFirst = WebSiteContent::where('title','aboutus')->first();
    	$aboutusOffice = WebSiteContent::where('title','aboutusOffice')->first();

    	return view('about',compact('aboutusFirst','aboutusOffice'));
    }


    public function services($id){
    	$service = Services::find($id);
    	return view('service',compact('service'));
    }

    public function team(){
    	$teams = Team::all();
    	return view('team',compact('teams'));
    }

    public function agents(){
    	$agents = Partener::all();

    	return view('agents',compact('agents'));
    }

    public function contactPage(){
        return view('contact');
    }

    public function sendEmail(Request $request){
        $this->validate($request,[
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'required',
            ],[
                'name.required' => 'يرجى إضافة الاسم كاملاً',
                'email.required' => 'يرجى أن تقوم بإدخال البريد الالكتروني',
                'email.email' => 'يرجى أن تقوم بإدخال البريد الالكتروني بشكل صحيح',
                'phone.required' => 'يرجى أن تقوم بإضفة رقم للتواصل',
                'message.required' => 'يرجى أن تقوم بإدخال الرسالة', 
            ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        
        $users = array();

        // You Must change the user Email

        array_push($users, User::find(1));

        Notification::send($users,new \App\Notifications\ContactUs($name,$email,$phone,$message));


        Session::flash('success', 'تم ارسال رسالتك بنجاح');
        return redirect()->back();
    }
}
