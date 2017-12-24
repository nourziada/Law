<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class HomeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	return view('admin.index');
    }

    // Methods for Passwords 

    public function showPassword(){
        return view('admin.password.update');
    }

    
    public function changePassword(Request $request){
        $this->validate($request , [
                'old_password' => 'required',
                'password' => 'required|min:6|confirmed|different:old_password',
                'password_confirmation' => 'required',
            ],[
                'old_password.required' => 'يجب أن تقوم بإخال كلمة المرور القديمة',
                'password.required' => 'يجب أن تقوم بإدخال كلمة المرور الجديدة',
                'password.min' => 'يجب أن لا تقل كلمة المرور عن 6 أحرف وأرقام',
                'password.confirmed' => 'يجب أن تتطابق كلمة المرور الجديدة مع إعادة كلمة المرور',
                'password.different' => 'يجب أن تختلف كلمة المرور الجديدة عن كلمة المرور القديمة',
                'retype_new_password.required' => 'يجب أن تقوم بإعادة كلمة المرور الجديدة',
            ]);


        $user = Auth::user();

        $u_user = User::find(Auth::id());

        if(Hash::check($request->old_password, $user->password)){
            $u_user->password =  Hash::make($request->password);
            $u_user->save();

            Session::flash('success' , 'تم تحديث كلمة المرور بنجاح');
            return redirect()->back();
        }else {
            Session::flash('error' , 'كلمة المرور القديمة لا تتطابق مع كلمة المرور في سجلاتنا');
            return redirect()->back();
        }
    }

    // Methods for WebSite Settings

    public function showSetting(){
        $setting = Setting::first();
        return view('admin.setting.update',compact('setting'));
    }

    public function updateSetting(Request $request){
        $this->validate($request,[
                'address' => 'required|max:255',
                'mobile1' => 'required',
                'mobile2' => 'required',
                'fax' => 'required',
                'email1' => 'required',
                'email2' => 'required',
                'website' => 'required|url',
                'facebook' => 'required|url',
                'twitter' => 'required|url',
                'google' => 'required|url',
                'linkedin' => 'required|url',
            ] , [
                'address.required' => 'يجب أن تقوم بإدخال عنونا المكتب باللغتين',
                'mobile1.required' => 'يجب أن تقوم بإدخال رقم الموبايل الأول',
                'mobile2.required' => 'يجب أن تقوم بإدخال رقم الموبايل الثاني',
                'fax.required' => 'يجب أن تقوم بإدخال رقم الفاكس للمكتب',
                'email1.required' => 'يجب أن تقوم بإدخال البريد الالكتروني الأول للمكتب',
                'email2.required' => 'يجب أن تقوم بإدخال البريد الالكتروني الثاني للمكتب',
                'website.required' => 'يجب أن تقوم بإدخال رابط الموقع الالكتروني للمكتب',
                'wevsite.url' => 'يجب أن يكون رابط الموقع الالكتروني من نوع رابط وليس نص',
                'facebook.url' => 'يجب أن يكون رابط صفحة الفيس بوك من نوع رابط وليس نص عادي',
                'twitter.url' => 'يجب أن يكون رابط صفحة تويتر من نوع رابط وليس نص عادي',
                'google.url' => 'يجب أن يكون رابط صفحة جوجل بلس من نوع رابط وليس نص عادي',
                'linkedin.url' => 'يجب أن يكون رابط صفحة لينكد إن من نوع رابط وليس نص عادي',
            ]);

         $setting = Setting::first();
         $setting->address = serialize($request->address);
         $setting->mobile1 = $request->mobile1;
         $setting->mobile2 = $request->mobile2;
         $setting->fax = $request->fax;
         $setting->email1 = $request->email1;
         $setting->email2 = $request->email2;
         $setting->website = $request->website;
         $setting->facebook = $request->facebook;
         $setting->twitter = $request->twitter;
         $setting->google = $request->google;
         $setting->linkedin = $request->linkedin;
         $setting->save();

        Session::flash('success' , 'تم تحديث بيانات الموقع بنجاح');
        return redirect()->back();

    }

    
}
