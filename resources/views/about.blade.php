@extends('layouts.frontend')


@section('content')

<!--Start Breadcrumb Text area-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-text-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text text-center">
                                <h1 class="font-type">من نحن</h1>
                                <ul class="breadcrumbs">
                                   <li><a class="font-type" href="{{route('show.index')}}">الرئيسية</a><i class="fa fa-angle-left"></i></li>
                                   <li><a class="font-type" href="{{route('show.about')}}">من نحن</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        
        <!--End Breadcrumb Text area-->  
     	
        <!--Start Mission and vision area-->
        <section id="mission-vision-area">
        	<div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="mission-vision-text">
                            <div class="section-title mb-10">
                                <h2 class="font-type"><span>المقدمة</span></h2>
                            </div>
                            <p class="text-justify font-type">
                            {{unserialize($aboutusFirst->desc)[LaravelLocalization::getCurrentLocale()]}}

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="mission-vision-left-img">
                            <img src="{{$aboutusFirst->image}}" alt="">
                        </div>
                    </div>
                </div>


            	<div class="row mt-40">
                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    	<div class="mission-vision-left-img">
                        	<img src="{{$aboutusOffice->image}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    	<div class="mission-vision-text">
                        	<div class="section-title mb-10">
                        		<h2 class="font-type"><span>نبذة عن المكتب</span></h2>
                    		</div>
                            <p class="text-justify font-type">
                               {{unserialize($aboutusOffice->desc)[LaravelLocalization::getCurrentLocale()]}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Mission and vision area-->
        
        <!--Start Featured Services area-->
        <section id="featured-services-area-2" class="anim-5-all">
        	<div class="container">
            	<div class="row">
                	<div class="featured-services">
                        <!--Star Single Featured Services-->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-featured-item text-center">
                                <div class="featured-icon">
                                	<i class="fa fa-home"></i>
                                </div>
                                <div class="featured-text">
                                	<h4 class="font-type">قانون العائلة</h4>
                                </div>
                            </div>
                        </div>
                        <!--End Single Featured Services-->
                        <!--Star Single Featured Services-->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-featured-item text-center">
                                <div class="featured-icon">
                                	<i class="fa fa-gavel"></i>
                                </div>
                                <div class="featured-text">
                                	<h4 class="font-type">قانون جنائي</h4>
                                </div>
                            </div>
                        </div>
                        <!--End Single Featured Services-->
                        <!--Star Single Featured Services-->
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-featured-item text-center">
                                <div class="featured-icon">
                                	<i class="fa fa-road"></i>
                                </div>
                                <div class="featured-text">
                                	<h4 class="font-type">قانون العمل</h4>
                                </div>
                            </div>
                        </div>
                        <!--End Single Featured Services-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Featured Services area-->

@stop