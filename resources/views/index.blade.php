@extends('layouts.frontend')


@section('content')

<!-- #banner -->
<section id="banner">
    <div class="banner-container">
        <div class="banner home-v1">
            <ul>

            @foreach($sliders as $slider)
                <li
                        class="slider-1"
                        data-transition="fade"
                        data-slotamount="7"
                        data-thumb="{{$slider->image}}"
                        data-title="الثانية">

                    <img
                            src="{{$slider->image}}"
                            data-bgrepeat="no-repeat"
                            data-bgfit="cover"
                            data-bgposition="center center"
                            alt="slider image">

                    <div class="caption sfl sfb tp-resizeme caption-bold-heading text-center"
                         data-x="0"
                         data-y="200"
                         data-speed="700"
                         data-start="1700"
                         data-easing="easeOutBack"
                    >
                        <h1>
                        	{{unserialize($slider->title)[LaravelLocalization::getCurrentLocale()]}}
                        </h1>
                    </div>

                    <div class="caption sfr sfb tp-resizeme p-tag text-center"
                         data-x="0"
                         data-y="300"
                         data-speed="700"
                         data-start="2000"
                         data-easing="easeOutBack"
                    >
                        <p>
                        {{unserialize($slider->desc)[LaravelLocalization::getCurrentLocale()]}}
                        </p>
                    </div>
                    <div class="caption sft tp-resizeme thm-btn text-center"
                         data-x="0"
                         data-y="390"
                         data-speed="700"
                         data-start="2800"
                         data-easing="easeOutBack"
                    >
                        <a href="{{$slider->link}}">شاهد الخدمة <i class="fa fa-arrow-right"></i></a>
                    </div>

                </li>

            @endforeach

            </ul>
        </div>
    </div>
</section> <!-- /#banner -->


<section class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dtc icon-box">
                    <i class="icon icon-Phone2"></i>
                </div>
                <div class="dtc text-one">
                    <h3>
                        الحصول على استشارة قانونية: 

                        {{$settings->mobile1}} , {{$settings->mobile2}}</h3>
                </div>
                <div class="dtc icon-box">
                    <i class="fa fa-fax"></i>
                </div>
                <div class="dtc text-two">
                    <h4>فاكس: {{$settings->fax}}</h4>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Start welcome area-->
<section id="welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="welcome-attorney">
                    <div class="section-title">
                        <h1 class="font-type"><span>
                                        من نحن
                                    </span></h1>
                    </div>
                    <div class="welcome-text">
                        <p class="font-type">
                            {{str_limit(unserialize($aboutus->desc)[LaravelLocalization::getCurrentLocale()],1300)}}

                        </p>
                        <div class="our-law">
                            <a href="{{route('show.about')}}">اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <img class="img-responsive" src="{{$aboutus->image}}">
            </div>
        </div>
    </div>
</section>
<!--End welcome area-->

<!--Start Featured Services area-->
<section id="featured-services-area">
    <div class="container">
        <div class="featured-services">
            <div class="section-title text-center">
                <h2 class="font-type"><span>خدماتنا</span></h2>
            </div>
            <div class="row">
                <div class="top-featured">

               	@foreach($services as $serv)
                    <!--Star Single Featured Services-->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-featured">
                            <div class="single-featured-icon alignleft">
                                <i class="fa {{$serv->icon}}"></i>
                            </div>
                            <div class="single-featured-text">
                                <h5 class="font-type">
                                	{{unserialize($serv->title)[LaravelLocalization::getCurrentLocale()]}}
                                </h5>
                                <p class="font-type">{{str_limit(unserialize($serv->desc)[LaravelLocalization::getCurrentLocale()],340)}}</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Featured Services-->


                @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Featured Services area-->

<!--Start Our Attorneys Area-->
<section id="our-attorneys-area" class="anim-5-all home">
    <div class="container">
        <div class="row">
            <div class="our-attorneys">
                <div class="section-title text-center">
                    <h2 class="font-type"><span>فريقنا</span></h2>
                </div>


                @foreach($teams as $team)
                <!--Start Single Attorney-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-attorney">
                        <div class="attorney-image-holder">
                            <img src="{{$team->image}}" alt="">
                            <div class="attorney-overlay">
                                <div class="social-links">
                                @if($team->facebook != null)
                                    <a href="{{$team->facebook}}"><i class="fa fa-facebook mysocial_style"></i></a>
                                @endif

                                @if($team->twitter != null)
                                    <a href="{{$team->twitter}}"><i class="fa fa-twitter mysocial_style"></i></a>
                                @endif
                                
                                @if($team->google != null)    
                                    <a href="{{$team->google}}"><i class="fa fa-google-plus mysocial_style"></i></a>
                                @endif
                                
                                @if($team->linkedin != null)    
                                    <a href="{{$team->linkedin}}"><i class="fa fa-linkedin mysocial_style"></i></a>
                                @endif

                                </div>
                                <div class="attorney-ninus-icon">
                                    <img src="img/attorney-ninus-icon.png" alt="">
                                </div>
                            </div>
                            <div class="attorney-plus-icon">
                                <img src="img/attorney-plus-icon-golden.png" alt="">
                            </div>
                        </div>
                        <div class="attorney-name text-center">
                            <h6 class="font-type">{{unserialize($team->name)[LaravelLocalization::getCurrentLocale()]}}</h6>
                            <p class="font-type">{{unserialize($team->title)[LaravelLocalization::getCurrentLocale()]}}</p>
                        </div>
                    </div>
                </div>
                <!--End Single Attorney-->

                @endforeach

            </div>
        </div>
        <!--Start Lawyer Info-->
        <div class="row">
            <div class="lawyer-info">
                <!--Start Single lawyer info-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-lawyer-info">
                        <div class="fix lawyer-count alignleft">
                            <h1 class="timer" data-from="1" data-to="{{$statistic->years}}" data-speed="5000" data-refresh-interval="50">
                                {{$statistic->years}}</h1>
                        </div>
                        <div class="fix lawyer-text">
                            <p class="font-type">سنوات <br>الخبرة</p>
                        </div>
                    </div>
                </div>
                <!--End Single lawyer info-->
                <!--Start Single lawyer info-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-lawyer-info">
                        <div class="fix lawyer-count alignleft">
                            <h1 class="timer" data-from="10" data-to="{{$statistic->agents}}" data-speed="5000" data-refresh-interval="50">
                               {{$statistic->agents}} </h1>
                        </div>
                        <div class="fix lawyer-text">
                            <p class="font-type">عملاء سعيدون بالتعامل معنا</p>
                        </div>
                    </div>
                </div>
                <!--End Single lawyer info-->
                <!--Start Single lawyer info-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-lawyer-info">
                        <div class="fix lawyer-count alignleft">
                            <h1 class="timer" data-from="10" data-to="{{$statistic->success}}" data-speed="5000" data-refresh-interval="50">
                                {{$statistic->success}}</h1>
                        </div>
                        <div class="fix lawyer-text">
                            <p class="font-type">الحالات <br>الناجحة</p>
                        </div>
                    </div>
                </div>
                <!--End Single lawyer info-->
                <!--Start Single lawyer info-->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="single-lawyer-info no-norder">
                        <div class="fix lawyer-count alignleft">
                            <h1 class="timer" data-from="10" data-to="{{$statistic->jobs}}" data-speed="5000" data-refresh-interval="50">
                                {{$statistic->jobs}}</h1>
                        </div>
                        <div class="fix lawyer-text">
                            <p class="font-type">وظائف<br> تمت</p>
                        </div>
                    </div>
                </div>
                <!--End Single lawyer info-->

            </div>
        </div>
        <!--Start Lawyer Info-->
    </div>
</section>
<!--End Our Attorneys Area-->


<!--Start Testimonial Area-->
<section id="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <div class="testimonial-list">
                    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">

                        @foreach($saids as $said)
                            <!--Start Testimonial Single Item-->
                            <div class="item 
                            	@if($said->id == $firstSaidId)
                            		active
                            	@endif
                            ">
                                <div class="single-testimonial-item text-center">
                                    <div class="testimonial-image-holder">
                                        <img src="{{$said->image}}" alt="">
                                    </div>
                                    <p class="font-type">"{{unserialize($said->desc)[LaravelLocalization::getCurrentLocale()]}}"</p>

                                    <div class="testimonial-author">
                                        <h4 class="font-type">-{{unserialize($said->name)[LaravelLocalization::getCurrentLocale()]}}</h4>
                                    </div>
                                </div>
                            </div>
                            <!--End Testimonial Single Item-->
                        @endforeach
                            <a class="left testimonial-control" href="#testimonial-carousel" role="button"
                               data-slide="prev"><i class="fa fa-long-arrow-left testimonial-ctl-button"></i></a>
                            <a class="right testimonial-control" href="#testimonial-carousel" role="button"
                               data-slide="next"><i class="fa fa-long-arrow-right testimonial-ctl-button"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Area-->

<!-- #clients -->
<section id="clients" dir="ltr">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="img/clients/client-1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-4.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-5.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-4.png" alt="">
                    </div>
                    <div class="item">
                        <img src="img/clients/client-5.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> <!-- /#clients -->

<!--Start Case Evaluation area-->
<section id="case-evaluation-area" class="anim-5-all">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <div class="case-evaluation-form">
                    <div class="case-evaluation-form-title">
                        <h1 class="font-type">تواصل معنا</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="font-type" placeholder="الأسم الأول">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="font-type" placeholder="الأسم الأخير">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="font-type" placeholder="البريد الالكتروني">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="font-type" placeholder="رقم الهاتف">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea class="font-type" placeholder="الرسالة"></textarea>
                        </div>
                    </div>
                    <button class="font-type" type="submit">ارسال</button>

                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="case-evaluation-image clearfix">
                    <img class="img-responsive" src="img/case-evaluation-image.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Case Evaluation area-->

<!--Start legal problem area-->
<section id="legal-problem-area" class="anim-5-all">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="legal-problem-text">
                    <h2 class="font-type">إذا كان لديك أي مشكلة قانونية في حياتك ... نحن متاحون</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="get-free-consultation-button">
                    <a href="#" class="font-type">استشيرنا <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End legal problem area-->


@stop