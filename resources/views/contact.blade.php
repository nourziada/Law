@extends('layouts.frontend')


@section('content')

<!--Start Breadcrumb Text area-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-text-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text text-center">
                                <h1 class="font-type">تواصل معنا</h1>
                                <ul class="breadcrumbs">
                                   <li><a class="font-type" href="{{route('show.index')}}">الرئيسية</a><i class="fa fa-angle-left"></i></li>
                                   <li><a class="font-type" href="{{route('show.contact')}}">تواصل معنا</a></li>
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
                            <h2 class="font-type"><span>تواصل معنا</span></h2>
                        </div>
                        <p class="font-type text-center mb-30"> لا تتردد في الإتصال بنا لمعرفة ما يمكن أن يقدّم لكم مكتب المحامي محمد بن خليفة آل ثاني، محامون ومستشارون قانونيون</p>

                        @include('includes.errors')

                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="contact-form">
                                <form action="{{route('send.contact')}}" method="post" class="thm-contact-form" novalidate="novalidate">
                                {{csrf_field()}}
                                
                                    <input name="name" type="text" placeholder="الاسم" class="valid" required>
                                
                                    <input name="email" type="email" placeholder="البريد الالكتروني" required>
                                    <input name="phone" type="number" placeholder="رقم الهاتف" required>
                                    <textarea name="message" placeholder="الرسالة" required></textarea>
                                    <button type="submit" class="font-type">ارسال <i class="fa fa-arrow-right"></i></button>
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
                                    <p class="font-type">هاتف : {{$settings->mobile1}}, {{$settings->mobile2}}</p>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1098398.518120236!2d51.051663049883665!3d25.271718594510556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1514040607821" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

@stop