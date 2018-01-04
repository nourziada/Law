@extends('layouts.admin')

@section('content')



<div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
                        <li class="bring_right"><a href="{{route('parteners.index')}}">عملائنا</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">

                    <h1 class="heading_title">إضافة عميل جديد</h1>


                    @include('includes.errors')


                    <div class="form" >
                        <form class="form-horizontal" action="{{route('parteners.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">اسم العميل (العربية)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="name[ar]" placeholder="اسم العميل باللغة العربية" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">Partener Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="name[en]" placeholder="Partener Name in English" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">Partener Name(French)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="name[fr]" placeholder="Partener Name in French" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                    <button type="submit" class="btn btn-success">إضافة عميل جديد</button>
                                    <button type="reset" class="btn btn-default">مسح الحقول</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@stop