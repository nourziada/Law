<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services;
use Illuminate\Http\Request;
use Session;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = Services::orderBy('created_at','desc')->paginate(10);
        return view('admin.services.index',compact('services'));
    }

   
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'title' => 'required',
                'desc' => 'required',
                'image' => 'required|image',
                
            ],[
                'title.required' => 'يجب أن تقوم بإدخال عنوان الخدمة رجاءً',
                'desc.required' => 'يجب أن تقوم بإدخال محتوى الخدمة رجاءً',
                'image.required' => 'يجب أن تقوم بإدراج صورة للخدمة',
                'image.image' => 'يجب أن تكون الصورة المرفوعة من نوع صورة',

            ]);

        $service = new Services;


        if($request->hasFile('image')){
            $featured = $request->image;
            $featured_new_name = time().$featured->getClientOriginalName();

            $featured->move('uploads' , $featured_new_name);

            $service->image = '/uploads/' . $featured_new_name;
        }

        $service->title = serialize($request->title);
        $service->desc = serialize($request->desc);
        $service->icon = $request->icon;

        $service->save();

        Session::flash('success', 'تمت إضافة الخدمة بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::find($id);
        $title = $service->title;
        $desc = $service->desc;
        $icon = $service->icon;
        return view('admin.services.edit',compact('title','desc','icon','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $this->validate($request,[
                'title' => 'required',
                'desc' => 'required',
                'image' => 'image',
                
            ],[
                'title.required' => 'يجب أن تقوم بإدخال عنوان الخدمة رجاءً',
                'desc.required' => 'يجب أن تقوم بإدخال محتوى الخدمة رجاءً',
                'image.image' => 'يجب أن تكون الصورة المرفوعة من نوع صورة',

            ]);

        $service = Services::find($id);
        if($request->hasFile('image')){
            $featured = $request->image;
            $featured_new_name = time().$featured->getClientOriginalName();

            $featured->move('uploads' , $featured_new_name);

            $service->image = '/uploads/' . $featured_new_name;
        }

        
        $service->title = serialize($request->title);
        $service->desc = serialize($request->desc);

        if($request->icon == null) {
            $service->icon = $request->old_icon;
        }else{
            $service->icon = $request->icon;
        }
        
        $service->save();

        Session::flash('success', 'تم تحديث بيانات الخدمة بنجاح');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Services::find($id);
        $service->delete();

        Session::flash('success', 'تم حذف الخدمة بنجاح');
        return redirect()->back();
    }
}
