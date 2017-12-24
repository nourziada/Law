@extends('layouts.frontend')

@section('content')


<!--Start Breadcrumb Text area-->
<section class="breadcrumb-area">
    <div class="breadcrumb-text-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-text text-center">
                        <h1 class="font-type">فريقنا</h1>
                        <ul class="breadcrumbs">
                            <li><a class="font-type" href="{{route('show.index')}}">الرئيسية</a><i class="fa fa-angle-left"></i></li>
                            <li><a class="font-type" href="{{route('show.team')}}">فريقنا</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--End Breadcrumb Text area-->

<section id="our-attorneys-area " class="anim-5-all home our-team mt-40">
    <div class="container">
        <div class="row">
            <div class="our-attorneys">
                <div class="section-title text-center">
                    <h2 class="font-type"><span>فريقنا</span></h2>
                </div>

            @foreach($teams as $team)    
                <div class="row" style="margin-bottom: 40px !important;">
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
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                        <p class="font-type text-justify">
                        {{unserialize($team->desc)[LaravelLocalization::getCurrentLocale()]}}
                        </p>
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </div>
</section>


@stop