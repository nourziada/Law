<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;
use Session;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $teams = Team::orderBy('created_at','desc')->paginate(10);

       
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
                'name' => 'required',
                'title' => 'required|max:20',
                'desc' => 'required',
                'image' => 'required|image',
                'facebook' => 'sometimes|nullable|url',
                'twitter' => 'sometimes|nullable|url',
                'google' => 'sometimes|nullable|url',
                'linkedin' => 'sometimes|nullable|url',
                
            ],[
                'name.required' => 'يجب أن تقوم بإدخال الاسم كاملاً للعضو رجاءً',
                'title.required' => 'يجب أن تقوم بإدخال المسمى الوظيفي للعضو رجاءً',
                'title.max' => 'المسمى الوظيفي يجب أن لا يزيد عن 20 حرف',
                'desc.required' => 'يجب أن تقوم بإدخال الوصف للعضو رجاءً',
                'image.required' => 'يجب أن تقوم بإدراج صورة شخصية للعضو',
                'image.image' => 'يجب أن تكون الصورة المرفوعة من نوع صورة',
                'facebook.url' => 'يجب أن يكون رابط صفحة الفيس بوك من نوع رابط وليس نص عادي',
                'twitter.url' => 'يجب أن يكون رابط صفحة تويتر من نوع رابط وليس نص عادي',
                'google.url' => 'يجب أن يكون رابط صفحة جوجل بلس من نوع رابط وليس نص عادي',
                'linkedin.url' => 'يجب أن يكون رابط صفحة لينكد إن من نوع رابط وليس نص عادي',

            ]);

        $team = new Team;


        if($request->hasFile('image')){
            $featured = $request->image;
            $featured_new_name = time().$featured->getClientOriginalName();

            $featured->move('uploads' , $featured_new_name);

            $team->image = '/uploads/' . $featured_new_name;
        }

        $team->name = serialize($request->name);
        $team->title = serialize($request->title);
        $team->desc = serialize($request->desc);
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->google = $request->google;
        $team->linkedin = $request->linkedin;

        $team->save();

        Session::flash('success', 'تمت إضافة العضو الى فريقنا بنجاح');
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
        $team = Team::find($id);
        $name = $team->name;
        $title = $team->title;
        $desc = $team->desc;
        $facebook = $team->facebook;
        $twitter = $team->twitter;
        $google = $team->google;
        $linkedin = $team->linkedin;
        return view('admin.team.edit',compact('name','title','desc','facebook','twitter','google','linkedin','id'));
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
                'name' => 'required',
                'title' => 'required|max:20',
                'desc' => 'required',
                'image' => 'image',
                'facebook' => 'sometimes|nullable|url',
                'twitter' => 'sometimes|nullable|url',
                'google' => 'sometimes|nullable|url',
                'linkedin' => 'sometimes|nullable|url',
                
            ],[
                'name.required' => 'يجب أن تقوم بإدخال الاسم كاملاً للعضو رجاءً',
                'title.required' => 'يجب أن تقوم بإدخال المسمى الوظيفي للعضو رجاءً',
                'title.max' => 'المسمى الوظيفي يجب أن لا يزيد عن 20 حرف',
                'desc.required' => 'يجب أن تقوم بإدخال الوصف للعضو رجاءً',
                'image.image' => 'يجب أن تكون الصورة المرفوعة من نوع صورة',
                'facebook.url' => 'يجب أن يكون رابط صفحة الفيس بوك من نوع رابط وليس نص عادي',
                'twitter.url' => 'يجب أن يكون رابط صفحة تويتر من نوع رابط وليس نص عادي',
                'google.url' => 'يجب أن يكون رابط صفحة جوجل بلس من نوع رابط وليس نص عادي',
                'linkedin.url' => 'يجب أن يكون رابط صفحة لينكد إن من نوع رابط وليس نص عادي',

            ]);

        $team = Team::find($id);


        if($request->hasFile('image')){
            $featured = $request->image;
            $featured_new_name = time().$featured->getClientOriginalName();

            $featured->move('uploads' , $featured_new_name);

            $team->image = '/uploads/' . $featured_new_name;
        }

        $team->name = serialize($request->name);
        $team->title = serialize($request->title);
        $team->desc = serialize($request->desc);
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->google = $request->google;
        $team->linkedin = $request->linkedin;

        $team->save();

        Session::flash('success', 'تمت تحديث بيانات العضو بنجاح');
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
        $team = Team::find($id);
        $team->delete();

        Session::flash('success', 'تم حذف الشريحة بنجاح');
        return redirect()->back();
    }
}
