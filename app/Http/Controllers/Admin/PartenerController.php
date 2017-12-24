<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Partener;
use Illuminate\Http\Request;
use Session;

class PartenerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $parteners = Partener::orderBy('created_at','desc')->paginate(10);

       
        return view('admin.parteners.index',compact('parteners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.parteners.create');
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
                'name' => 'required|max:255',
                
            ],[
                'name.required' => 'يجب أن تقوم بإدخال اسم العميل رجاءً',
                'name.max' => 'اسم العميل يجب أن لا يزيد عن 255 حرف',

            ]);


        $part = new Partener;

        $part->name = serialize($request->name);
        $part->save();

        Session::flash('success', 'تمت إضافة العميل بنجاح');
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
        $part = Partener::find($id);
        $name = $part->name;
        return view('admin.parteners.edit',compact('name','id'));
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
                'name' => 'required|max:255',
                
            ],[
                'name.required' => 'يجب أن تقوم بإدخال اسم العميل رجاءً',
                'name.max' => 'اسم العميل يجب أن لا يزيد عن 255 حرف',

            ]);


        $part = Partener::find($id);

        $part->name = serialize($request->name);
        $part->save();

        Session::flash('success', 'تم تحديث البيانات بنجاح');
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
        $part = Partener::find($id);
        $part->delete();

        Session::flash('success', 'تم حذف بيانات العميل بنجاح');
        return redirect()->back();
    }
}
