@extends('layouts.admin')

@section('content')

<style type="text/css">
    .form-group label {
        text-align: right !important;
    }
</style>
<div class="main_content_container">
            <div class="main_container  main_menu_open">
                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
                        <li class="bring_right"><a href="{{route('show.admin.setting')}}">بيانات الموقع</a></li>
                    </ul>
                </div>
                <!--/End system bath-->
                <div class="page_content">

                    <h1 class="heading_title">تحديث بيانات الموقع الالكتروني</h1>


                    @include('includes.errors')


                    <div class="form" >
                        <form class="form-horizontal" action="{{route('update.admin.setting')}}" method="post">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="input0" class="col-sm-4 control-label bring_right left_text">عنوان المكتب (العربية)*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input0" name="address[ar]" value="{{unserialize($setting->address)['ar']}}" placeholder="أدخل عنوان المكتب باللغة العربية" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input0" class="col-sm-4 control-label bring_right left_text">Address English*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input0" name="address[en]" value="{{unserialize($setting->address)['en']}}" placeholder="Enter the Office Address in English" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-4 control-label bring_right left_text">رقم الموبايل الأول</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="input2" name="mobile1" value="{{$setting->mobile1}}" placeholder="أدخل رقم الموبايل الأول" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-4 control-label bring_right left_text">رقم الموبايل الثاني</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="input2" name="mobile2" value="{{$setting->mobile2}}" placeholder="أدخل رقم الموبايل الثاني" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input2" class="col-sm-4 control-label bring_right left_text">رقم الموبايل الفاكس</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="input2" name="fax" value="{{$setting->fax}}" placeholder="أدخل رقم الفاكس" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input3" class="col-sm-4 control-label bring_right left_text">عنوان البريد الالكتروني الأول</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="input3" name="email1" value="{{$setting->email1}}" placeholder="أدخل عنوان البريد الالكتروني الأول" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input3" class="col-sm-4 control-label bring_right left_text">عنوان البريد الالكتروني الثاني</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="input3" name="email2" value="{{$setting->email2}}" placeholder="أدخل عنوان البريد الالكتروني الثاني" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input3" class="col-sm-4 control-label bring_right left_text">رابط الموقع الالكتروني</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input3" name="website" value="{{$setting->website}}" placeholder="أدخل رابط العنوان الالكتروني للمكتب" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input2" class="col-sm-4 control-label bring_right left_text">رابط صفحة الفيس بوك</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input2" name="facebook" value="{{$setting->facebook}}" placeholder="رابط صفحة الفيس بوك للمكتب">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-4 control-label bring_right left_text">رابط حساب تويتر</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input2" name="twitter" value="{{$setting->twitter}}" placeholder="رابط حساب تويتر للمكتب">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input2" class="col-sm-4 control-label bring_right left_text">رابط حساب جوجل بلس للعضو</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input2" name="google" value="{{$setting->google}}" placeholder="رابط حساب جوجل بلس للمكتب">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="input2" class="col-sm-4 control-label bring_right left_text">رابط حساب لينكد إن</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="input2" name="linkedin" value="{{$setting->linkedin}}" placeholder="رابط حساب لينكد إن للمكتب">
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