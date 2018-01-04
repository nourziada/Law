@extends('layouts.frontend')


@section('content')

<!--Start Breadcrumb Text area-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-text-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text text-center">
                                <h1 class="font-type">{{trans('main.contactUs')}}</h1>
                                <ul class="breadcrumbs">
                                   <li><a class="font-type" href="{{route('show.index')}}">{{trans('main.home')}}</a><i class="fa fa-angle-left"></i></li>
                                   <li><a class="font-type" href="{{route('show.contact')}}">{{trans('main.contactUs')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        
        <!--End Breadcrumb Text area-->

        <section id="contact-area" class="anim-5-all">
            <div class="container">
                <div class="row">
                    <div class="contact">
                        <div class="section-title text-center">
                            <h2 class="font-type"><span>{{trans('main.contactUs')}}</span></h2>
                        </div>
                        <p class="font-type text-center mb-30">{{trans('main.contactText')}}</p>

                        @include('includes.errors')

                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="contact-form">
                                <form action="{{route('send.contact')}}" method="post" class="thm-contact-form">
                                {{csrf_field()}}
                                
                                    <input name="name" type="text" placeholder="{{trans('main.fullName')}}" class="valid" required>
                                
                                    <input name="email" type="email" placeholder="{{trans('main.email')}}" required>
                                    <input name="phone" type="number" placeholder="{{trans('main.phone')}}" required>
                                    <textarea name="message" placeholder="{{trans('main.msg')}}" required></textarea>
                                    <button type="submit" class="font-type">{{trans('main.submit')}} <i class="fa fa-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-right ">
                                <div class="contact-right-text">
                                  <div >
                                      <i class="fa fa-map-marker"></i>
                                      <p class="font-type">{{unserialize($settings->address)[LaravelLocalization::getCurrentLocale()]}}</p>
                                  <div class="clearfix"></div>
                                  </div>
                                    <div class="mt-15">
                                        <i class="fa fa-phone"></i>
                                    <p class="font-type">{{trans('main.mobile')}} : {{$settings->mobile1}}, {{$settings->mobile2}}</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="mt-15">
                                        <i class="fa fa-envelope"></i>
                                        <p class=" font-type"><a href="mailto:{{$settings->email1}}" target="_top">{{$settings->email1}}</a>
                                            <br>  <a href="mailto:{{$settings->email2}}" target="_top">{{$settings->email2}}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.655553230978!2d51.50377368498869!3d25.28216998385669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDE2JzU1LjgiTiA1McKwMzAnMDUuNyJF!5e0!3m2!1sar!2sqa!4v1514976155433" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

@stop