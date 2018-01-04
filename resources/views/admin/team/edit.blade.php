@extends('layouts.admin')

@section('content')

<div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
                        <li class="bring_right"><a href="{{route('team.index')}}">الأعضاء المضافين</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">

                    <h1 class="heading_title">تعديل بيانات العضو</h1>


                    @include('includes.errors')


                    <div class="form" >
                        <form class="form-horizontal" action="{{route('team.update',['id' => $id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم كاملاً *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="name[ar]" value="{{unserialize($name)['ar']}}" placeholder="الاسم كاملاً بالعربية" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">المسمى الوظيفي *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input2" name="title[ar]" value="{{unserialize($title)['ar']}}" placeholder="المسمى الوظيفي باللغة العربية" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input3" class="col-sm-2 control-label bring_right left_text">الوصف *</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="8" id="input1" placeholder="الوصف لهذا العضو باللغة العربية" name="desc[ar]" required>{{unserialize($desc)['ar']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label bring_right left_text">الصور الشخصية للعضو *</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" style="height: unset;" name="image" id="input4">
                                    <p>إذا كنت لا تريد تغيير الصورة ، فأتركها فارغة</p>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">رابط صفحة الفيس بوك</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input2" name="facebook" value="{{$facebook}}" placeholder="رابط صفحة الفيس بوك للعضو">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">رابط حساب تويتر للعضو</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input2" name="twitter" value="{{$twitter}}" placeholder="رابط حساب تويتر للعضو">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">رابط حساب جوجل بلس للعضو</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input2" name="google" value="{{$google}}" placeholder="رابط حساب جوجل بلس للعضو">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">رابط حساب لينكد إن للعضو</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input2" name="linkedin" value="{{$linkedin}}" placeholder="رابط حساب لينكد إن للعضو">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">Full Name *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="name[en]" placeholder="Full Name for Team Member in English" value="{{unserialize($name)['en']}}" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">Job Title *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="title[en]" value="{{unserialize($title)['en']}}" placeholder="Enter Job Title here in English " required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">Member Description *</label>
                                <div class="col-sm-10">
                                    
                                    <textarea class="form-control" rows="8" id="input1" placeholder="Enter Member Description here in English" name="desc[en]" required>{{unserialize($desc)['en']}}</textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">Full Name(French)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="name[fr]" placeholder="Full Name for Team Member in French" value="{{unserialize($name)['fr']}}" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">Job Title(French)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="title[fr]" value="{{unserialize($title)['fr']}}" placeholder="Enter Job Title here in French " required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">Member Description(French)</label>
                                <div class="col-sm-10">
                                    
                                    <textarea class="form-control" rows="8" id="input1" placeholder="Enter Member Description here in French" name="desc[fr]" required>{{unserialize($desc)['fr']}}</textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                    <button type="submit" class="btn btn-success">تحديث بيانات العضو</button>
                                    <button type="reset" class="btn btn-default">مسح الحقول</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@stop