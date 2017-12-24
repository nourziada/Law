<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Said;
use Illuminate\Http\Request;
use Session;

class SaidController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $saids = Said::orderBy('created_at','desc')->paginate(10);
        return view('admin.said.index',compact('saids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.said.create');
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
                'name' => 'required|max:200',
                'desc' => 'required',
                'image' => 'required|image',               
            ],[
                'name.required' => 'يجب أن تقوم بإدخال الاسم كاملاً للمقيم رجاءً',
                'name.max' => 'الاسم كاملاً يجب أن لا يزيد عن 200 حرف',
                'desc.required' => 'يجب أن تقوم بإدخال الوصف للتقييم رجاءً',
                'image.required' => 'يجب أن تقوم بإدراج صورة شخصية للعضو',
                'image.image' => 'يجب أن تكون الصورة المرفوعة من نوع صورة',
            ]);

        $said = new Said;


        if($request->hasFile('image')){
            $featured = $request->image;
            $featured_new_name = time().$featured->getClientOriginalName();

            $featured->move('uploads' , $featured_new_name);

            $said->image = '/uploads/' . $featured_new_name;
        }

        $said->name = serialize($request->name);
        $said->desc = serialize($request->desc);

        $said->save();

        Session::flash('success', 'تمت إضافة التقييم بنجاح');
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
        $said = Said::find($id);
        $name = $said->name;
        $desc = $said->desc;
        return view('admin.said.edit',compact('name','desc','id'));
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
                'name' => 'required|max:200',
                'desc' => 'required',
                'image' => 'image',               
            ],[
                'name.required' => 'يجب أن تقوم بإدخال الاسم كاملاً للمقيم رجاءً',
                'name.max' => 'الاسم كاملاً يجب أن لا يزيد عن 200 حرف',
                'desc.required' => 'يجب أن تقوم بإدخال الوصف للتقييم رجاءً',
                'image.image' => 'يجب أن تكون الصورة المرفوعة من نوع صورة',
            ]);

        $said = Said::find($id);


        if($request->hasFile('image')){
            $featured = $request->image;
            $featured_new_name = time().$featured->getClientOriginalName();

            $featured->move('uploads' , $featured_new_name);

            $said->image = '/uploads/' . $featured_new_name;
        }

        $said->name = serialize($request->name);
        $said->desc = serialize($request->desc);
        $said->save();

        Session::flash('success', 'تمت تحديث بيانات التقييم بنجاح');
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
        $said = Said::find($id);
        $said->delete();

        Session::flash('success', 'تم حذف التقييم بنجاح');
        return redirect()->back();
    }
}
