<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Partener;
use App\Said;
use App\Services;
use App\Slider;
use App\Statistic;
use App\Team;
use App\WebSiteContent;
use Illuminate\Http\Request;

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
}
