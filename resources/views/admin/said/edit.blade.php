@extends('layouts.admin')

@section('content')

<div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
                        <li class="bring_right"><a href="{{route('said.index')}}">التقييمات المضافين</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">

                    <h1 class="heading_title">تعديل تقييم جديد</h1>


                    @include('includes.errors')


                    <div class="form" >
                        <form class="form-horizontal" action="{{route('said.update',['id' => $id])}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">الاسم كاملاً *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="name[ar]" value="{{unserialize($name)['ar']}}" placeholder="الاسم كاملاً بالعربية" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input3" class="col-sm-2 control-label bring_right left_text">التقييم *</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="8" id="input1" placeholder="الوصف لهذا العضو باللغة العربية" name="desc[ar]" required>{{unserialize($desc)['ar']}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input4" class="col-sm-2 control-label bring_right left_text">الصور الشخصية للمقيم *</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" style="height: unset;" name="image" id="input4">
                                    <p>إذا كنت لا تريد تغيير الصورة ، فأتركها فارغة</p>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">Full Name *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input0" name="name[en]" placeholder="Full Name for Team Member in English" value="{{unserialize($name)['en']}}" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">Rating *</label>
                                <div class="col-sm-10">
                                    
                                    <textarea class="form-control" rows="8" id="input1" placeholder="Enter Member Description here in English" name="desc[en]" required>{{unserialize($desc)['en']}}</textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                    <button type="submit" class="btn btn-success">تحديث بيانات التقييم</button>
                                    <button type="reset" class="btn btn-default">مسح الحقول</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@stop