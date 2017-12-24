@extends('layouts.frontend')


@section('content')

<!--Start Breadcrumb Text area-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-text-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text text-center">
                                <h1 class="font-type">{{unserialize($service->title)[LaravelLocalization::getCurrentLocale()]}}</h1>
                                <ul class="breadcrumbs">
                                   <li><a class="font-type" href="{{route('show.index')}}">الرئيسية</a><i class="fa fa-angle-left"></i></li>
                                   <li><a class="font-type" href="{{route('show.services',['id' => $service->id])}}">خدماتنا</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>


        <section id="practice-v5-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="practice-right-sidebar">
                            <!--Start practice right single sidebar-->
                            <div class="practice-right-single-sidebar">
                                <ul class="practice-law-box" >

                                @foreach($allServices as $serv)
                                    <!--Start single law box-->
                                    <li class="single-law-box 
                                    	@if($serv->id == $service->id)

                                    		active

                                    	@endif
                                    " >
                                        <a href="{{route('show.services',['id' => $serv->id])}}" aria-controls="Criminal" >{{unserialize($serv->title)[LaravelLocalization::getCurrentLocale()]}}<i class="fa fa-angle-right"></i></a>
                                    </li>
                                @endforeach  
                            
                                    <!--End single law box-->
                                </ul>
                            </div>
                            <!--End practice right single sidebar-->
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                        <div class="practice-left-content " >

                                <img class="img-responsive" src="{{$service->image}}">

                            <div class=" practice-left-middle-text">
                                <div class="section-title mb-0">
                                    <h2 class="font-type"><span>{{unserialize($service->title)[LaravelLocalization::getCurrentLocale()]}}</span></h2>
                                </div>
                                <p class="font-type">
                                {{unserialize($service->desc)[LaravelLocalization::getCurrentLocale()]}}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

@stop