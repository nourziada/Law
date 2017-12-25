<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mohammed bin Khalifa Al Thani – Lawyers & Legal Consultants</title>
    <meta name="description" content="">
    <!-- favicon icon -->
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}"/>
    <!-- Reponsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--fonts-->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
    <!-- Main stylesheet -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!--costume css-->
    <link rel="stylesheet" href="{{asset('css/costum.css')}}">
    <link rel="stylesheet" href="{{asset('css/space.css')}}">
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body dir="rtl">
<!--[if lt IE 8]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
        href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->


<!-- menu  -->
<header class="stricky anim-5-all">
    <div class="container">
        <div class="logo pull-right">
            <a href="{{route('show.index')}}">
                <img src="{{asset('img/logo-2.png')}}" alt="Logo image">
            </a>
        </div>
        <nav class="mainmenu pull-left">
            <div class="nav-holder">
                <ul>
                    <li><a href="{{route('show.index')}}">الرئيسية</a></li>
                    <li><a href="{{route('show.about')}}">من نحن</a></li>
                    <li class="dropdown">
                        <a href="##">خدماتنا</a>
                        <ul class="submenu">

                        @foreach($allServices as $serv)
                            <li><a href="{{route('show.services',['id' => $serv->id])}}">{{unserialize($serv->title)[LaravelLocalization::getCurrentLocale()]}}</a></li>
                        @endforeach    
                        </ul>
                    </li>
                    <li><a href="{{route('show.team')}}">فريقنا</a></li>
                    <li><a href="{{route('show.agents')}}">عملائنا</a></li>
                    <li><a href="{{route('show.contact')}}">تواصل معنا</a></li>

                    <li>
                    @if(LaravelLocalization::getCurrentLocaleName() == 'Arabic')
                    <a href="{{LaravelLocalization::getLocalizedUrl('en')}}">
                        
                            EN
                        
                    </a>
                    @endif

                    @if(LaravelLocalization::getCurrentLocaleName() == 'English')
                    <a href="{{LaravelLocalization::getLocalizedUrl('ar')}}">
                        
                            عربي
                        
                    </a>
                    @endif

                    </li>
                </ul>
            </div>
            <div class="nav-expander">
                <ul>
                    <li><button class="nav-collapser"><i class="fa fa-bars"></i></button></li>
                </ul>
            </div>
        </nav>

    </div>
</header>

    <!-- Main Content -->


    @yield('content')


    <!-- End Main Content -->


<!-- Footer -->
<section id="footer-widget-area">
    <div class="container">
        <div class="row">
            <!--Start Single Footer widget-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="footer-logo">
                        <img src="{{asset('img/logo-2.png')}}" alt="">
                    </div>
                    <div class="widget-text">
                        <p class="font-type">{{str_limit(unserialize($aboutOffice->desc)[LaravelLocalization::getCurrentLocale()],300)}}</p>
                    </div>

                    <div class="footer-read-more">
                        <a href="{{route('show.about')}}" class="font-type">اقرأ المزيد<i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></a>
                    </div>
                    <div class="widget-social-links">
                        <a href="{{$settings->facebook}}"><i class="fa fa-facebook mysocial_style"></i></a>
                        <a href="{{$settings->twitter}}"><i class="fa fa-twitter mysocial_style"></i></a>
                        <a href="{{$settings->google}}"><i class="fa fa-google-plus mysocial_style"></i></a>
                        <a href="{{$settings->linkedin}}"><i class="fa fa-linkedin mysocial_style"></i></a>
                    </div>
                </div>
            </div>
            <!--End Single Footer widget-->
            <!--Start Single Footer widget-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="quick-links">
                        <h3 class="font-type">روابط سريعة</h3>
                        <ul class="left-quick-links alignleft">

                        @foreach($servicesFooter as $serv)
                            <li><i class="fa fa-angle-left"></i><a href="{{route('show.services',['id' => $serv->id])}}">{{unserialize($serv->title)[LaravelLocalization::getCurrentLocale()]}}</a></li>
                        @endforeach

                            
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Single Footer widget-->
            <!--Start Single Footer widget-->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="single-footer-widget">
                    <div class="widget-get-intouch quick-links">
                        <h3 class="font-type">كن على تواصل معنا</h3>
                        <ul>
                            <li class="location font-type">{{unserialize($settings->address)[LaravelLocalization::getCurrentLocale()]}}</li>
                            <li class="phone font-type">{{$settings->mobile1}}, {{$settings->mobile2}}</li>
                            <li class="envelop font-type"><a href="mailto:lawyer.althani@gmail.com" target="_top">{{$settings->email1}}</a>
                                <br>  <a href="mailto:milad.althanilawfirm@gmail.com" target="_top">{{$settings->email2}}</a></li>
                            <li class="website font-type"><a href="http://althaniattorney.com" target="_blank">{{$settings->website}}</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Single Footer widget-->

        </div>
    </div>
</section>
<!--End Footer widget area-->

<!--Start Footer area-->
<section id="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copy-right-text">
                    <p>Copyright © althaniattorney.com 2017. All rights reserved. </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Footer area-->

<script src="{{asset('js/vendor/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery.countTo.js')}}"></script>

<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


</body>
</html>
