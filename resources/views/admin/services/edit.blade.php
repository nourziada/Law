@extends('layouts.admin')

@section('content')



<div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
                        <li class="bring_right"><a href="{{route('services.index')}}">الخدمات المضافة</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">

                    <h1 class="heading_title">تعديل الخدمة</h1>


                    @include('includes.errors')


                    <div class="form" >
                        <form class="form-horizontal" action="{{route('services.update',['id' => $id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">عنوان الخدمة</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="title[ar]" value="{{unserialize($title)['ar']}}" placeholder="عنوان الخدمة باللغة العربية" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">محتوى الخدمة</label>
                                <div class="col-sm-10">

                                    <textarea class="form-control" rows="8" id="input1" placeholder="محتوى الخدمة باللغة العربية" name="desc[ar]" required>{{unserialize($desc)['ar']}}</textarea>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label bring_right left_text">صورة للخدمة</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" style="height: unset;" name="image" id="input4">
                                    <p>إذا كنت لا تريد تغيير الصورة ، فأتركها فارغة</p>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">Service Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="title[en]" value="{{unserialize($title)['en']}}" placeholder="Enter Service Title here in English " required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">Service Description</label>
                                <div class="col-sm-10">

                                    <textarea class="form-control" rows="8" id="input1" placeholder="Enter Service Description here in English" name="desc[en]" required>{{unserialize($desc)['en']}}</textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                    <button type="submit" class="btn btn-success">تحديث الخدمة</button>
                                    <button type="reset" class="btn btn-default">مسح الحقول</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



@stop