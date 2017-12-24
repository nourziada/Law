@extends('layouts.admin')

@section('content')

<div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
                        <li class="bring_right"><a href="{{route('show.admin.aboutus')}}">قسم من نحن</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">

                    <h1 class="heading_title">نبذة عن المكتب | من نحن</h1>


                    @include('includes.errors')


                    <div class="form" >
                        <form class="form-horizontal" action="{{route('update.admin.aboutus.office')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            

                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">المحتوى باللغة العربية</label>
                                <div class="col-sm-10">
                                    
                                    <textarea class="form-control" rows="8" id="input1" placeholder="المحتوى باللغة العربية" name="desc[ar]" required>{{unserialize($aboutOffice->desc)['ar']}}</textarea>

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label bring_right left_text">صورة القسم</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" style="height: unset;" name="image" id="input4">
                                    <p>إذا كنت لا تريد تغيير الصورة ، فأتركها فارغة</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">Content in English</label>
                                <div class="col-sm-10">
                                    
                                    <textarea class="form-control" rows="8" id="input1" placeholder="Content in English" name="desc[en]" required>{{unserialize($aboutOffice->desc)['en']}}</textarea>

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                    <button type="submit" class="btn btn-success">تعديل البيانات</button>
                                    <button type="reset" class="btn btn-default">مسح الحقول</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@stop