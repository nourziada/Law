@extends('layouts.admin')

@section('content')

<div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
                        <li class="bring_right"><a href="{{route('show.admin.statistic')}}">بيانات إحصائيات المكتب</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">

                    <h1 class="heading_title">تحديث بيانات إحصائيات المكتب</h1>


                    @include('includes.errors')


                    <div class="form" >
                        <form class="form-horizontal" action="{{route('update.admin.statistic')}}" method="post">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="input0" class="col-sm-2 control-label bring_right left_text">سنوات الخبرة</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="input0" name="years" value="{{$statistic->years}}" placeholder="أدخل رقم عدد سنوات الخبرة" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-2 control-label bring_right left_text">عملاء تعاملوا معنا</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="input2" name="agents" value="{{$statistic->agents}}" placeholder="أدخل رقم العملاء الذين تعاملو مع المكتب" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input3" class="col-sm-2 control-label bring_right left_text">عدد الحالات الناجحة</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="input3" name="success" value="{{$statistic->success}}" placeholder="أدخل عدد الحالات الناجحة  " required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input3" class="col-sm-2 control-label bring_right left_text">عدد الوظائف التي تمت</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="input3" name="jobs" value="{{$statistic->jobs}}" placeholder="أدخل رقم عدد الوظائف التي تمت في المكتب" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12 left_text">
                                    <button type="submit" class="btn btn-success">تحديث البيانات</button>
                                    <button type="reset" class="btn btn-default">مسح الحقول</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@stop