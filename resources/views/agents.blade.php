@extends('layouts.frontend')


@section('content')

		<!--Start Breadcrumb Text area-->
        <section class="breadcrumb-area">
            <div class="breadcrumb-text-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcrumb-text text-center">
                                <h1 class="font-type">{{trans('main.clients')}}</h1>
                                <ul class="breadcrumbs">
                                   <li><a class="font-type" href="{{route('show.index')}}">{{trans('main.home')}}</a><i class="fa fa-angle-left"></i></li>
                                   <li><a class="font-type" href="{{route('show.agents')}}">{{trans('main.clients')}}</a></li>
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
                <div class="section-title text-center mb-0">
                    <h2 class="font-type"><span>{{trans('main.someClients')}}</span></h2>
                </div>
                <div class="row">

               	@foreach($agents as $agent)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="client-container">
                            <p class="font-type">
                                {{unserialize($agent->name)[LaravelLocalization::getCurrentLocale()]}}
                            </p>
                        </div>
                    </div>

           		@endforeach


                </div>
            </div>
        </section>
        <!--End Mission and vision area-->


@stop