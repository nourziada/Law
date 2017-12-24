<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\WebSiteContent;
use Illuminate\Http\Request;
use Session;

class WebSiteContentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    // Functions For About US
    public function index(){
    	$about = WebSiteContent::where('title','aboutus')->get()->first();

    	return view('admin.aboutus.update',compact('about'));
    }

    public function updateAboutUs(Request $request){
    	$this->validate($request,[
                'desc' => 'required',
                'image' => 'image', 
            ],[  
                'desc.required' => 'يجب أن تقوم بإدخال المحتوى رجاءً',
                'image.image' => 'يجب أن تكون الصورة المرفوعة من نوع صورة',
            ]);

    	$about = WebSiteContent::where('title','aboutus')->get()->first();

    	if($request->hasFile('image')){
            $featured = $request->image;
            $featured_new_name = time().$featured->getClientOriginalName();

            $featured->move('uploads' , $featured_new_name);

            $about->image = '/uploads/' . $featured_new_name;
        }

        $about->desc = serialize($request->desc);
       	$about->save();

       	Session::flash('success', 'تمت تحديث المحتوى بنجاح');
        return redirect()->back();
    }
}
