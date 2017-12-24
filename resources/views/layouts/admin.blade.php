<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>لوحة التحكم</title>
    <link rel="icon" type="image/png" href="{{asset('admin_files/img/favicon.png')}}" />
    
    <link href="{{asset('admin_files/css/bootstrap.min.css')}}" rel="stylesheet">
    
    <link href="{{asset('admin_files/css/icon.css')}}" rel="stylesheet">
    <link href="{{asset('admin_files/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin_files/css/ar.css')}}" rel="stylesheet" class="lang_css arabic">

    <link href="{{asset('dist/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/fontawesome-iconpicker.min.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    <!--Start header-->
    <div class="row header_section">
        <div class="col-sm-3 col-xs-12 logo_area bring_right">
            <h1 class="inline-block"><img src="{{asset('admin_files/img/logo.png')}}" alt=""></h1>
            <span class="glyphicon glyphicon-align-justify bring_left open_close_menu" data-toggle="tooltip"
                  data-placement="right" title="Tooltip on left"></span>
        </div>
        <div class="col-sm-3 col-xs-12 head_buttons_area bring_right hidden-xs">
            
            <div class="inline-block full_screen bring_right hidden-xs">
                <span class="glyphicon glyphicon-fullscreen" data-toggle="tooltip" data-placement="left"
                      title="شاشة كاملة"></span>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-12 user_header_area bring_left left_text">
           

            <div class="user_info inline-block">
                <img src="img/user.jpg" alt="" class="img-circle">
                <span class="h4 nomargin user_name">{{Auth::user()->name}}</span>
                <span class="glyphicon glyphicon-cog"></span>
            </div>
        </div>
    </div>
    <!--/End header-->

    <!--Start body container section-->
    <div class="row container_section">

        <!--Start left sidebar-->
        <div class="user_details close_user_details  bring_left">
            <div class="user_area">
                <img class="img-thumbnail img-rounded bring_right" src="{{asset('admin_files/img/favicon.png')}}">

                <h1 class="h3">{{Auth::user()->name}}</h1>

               

                <p><a href="{{route('show.admin.password')}}">تغيير كلمة المرور</a></p>

                <p><a href="{{route('logout')}}">تسجيل الخروج</a></p>
            </div>

            <!-- 
            <div class="who_is_online">
                <h3>العامليين حاليا علي النظام</h3>

                <div class="employee_online">
                    <img src="img/user.jpg" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
                <div class="employee_online">
                    <img src="img/user.jpg" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
                <div class="employee_online">
                    <img src="img/user.jpg" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
                <div class="employee_online">
                    <img src="img/user.jpg" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
                <div class="employee_online">
                    <img src="img/user.jpg" class="img-circle bring_right">

                    <p>حسام جمال توفيق زوين</p>

                    <p>مركز التقنية - جامعة المنصورة</p>
                </div>
            </div>
            -->
        </div>
        <!--/End left sidebar-->

        <!--Start Side bar main menu-->
        <div class="main_sidebar bring_right">
            <div class="main_sidebar_wrapper">
                <form class="form-inline search_box text-center">
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="كلمة البحث">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </form>

                <ul>
                    <li class="{{ Request::is('admin') ? 'active' : '' }}">
                        <span class="glyphicon glyphicon-home"></span>
                        <a href="{{route('home')}}">الصفحة الرئيسية</a>
                    </li>

                    <li class="{{ Request::is('admin/slider') ? 'active' : '' }}">
                        <span class="glyphicon glyphicon-barcode"></span>
                        <div id="myDropdown">
                            <a href=""  class="dropdown-toggle" data-toggle="dropdown">الشريط المتحرك</a>
                            <ul class="drop_main_menu">
                                <li><a href="{{route('slider.create')}}">إضافة شريحة جديدة</a></li>
                                <li><a href="{{route('slider.index')}}">عرض كل الشرائح</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="{{ Request::is('admin/aboutus') ? 'active' : '' }}">
                        <span class="glyphicon glyphicon-grain"></span>
                        <div id="myDropdown">
                            <a href="">قسم من نحن</a>
                            <ul class="drop_main_menu">
                                <li><a href="{{route('show.admin.aboutus')}}">قسم المقدمة</a></li>
                                <li><a href="{{route('show.admin.aboutus.office')}}">قسم نبذة عن المكتب</a></li>
                            </ul>
                        </div>
                    </li>


                    <li class="{{ Request::is('admin/services') ? 'active' : '' }}">
                        <span class="glyphicon glyphicon-star"></span>
                        <div id="myDropdown">
                            <a href=""  class="dropdown-toggle" data-toggle="dropdown">الخدمات</a>
                            <ul class="drop_main_menu">
                                <li><a href="{{route('services.create')}}">إضافة خدمة جديدة</a></li>
                                <li><a href="{{route('services.index')}}">عرض كل الخدمات</a></li>
                            </ul>
                        </div>
                    </li>


                    <li class="{{ Request::is('admin/team') ? 'active' : '' }}">
                        <span class="glyphicon glyphicon-user"></span>
                            <a href=""  class="dropdown-toggle" data-toggle="dropdown">فريقنا</a>
                            <ul class="drop_main_menu">
                                <li><a href="{{route('team.create')}}">إضافة عضو جديد</a></li>
                                <li><a href="{{route('team.index')}}">عرض كل الأعضاء</a></li>
                            </ul>
                    </li>


                    <li class="{{ Request::is('admin/parteners') ? 'active' : '' }}">
                        <span class="glyphicon glyphicon-globe"></span>
                            <a href=""  class="dropdown-toggle" data-toggle="dropdown">عملائنا</a>
                            <ul class="drop_main_menu">
                                <li><a href="{{route('parteners.create')}}">إضافة عميل جديد</a></li>
                                <li><a href="{{route('parteners.index')}}">عرض كل العملاء</a></li>
                            </ul>
                    </li>


                    <li class="{{ Request::is('admin/said') ? 'active' : '' }}">
                        <span class="glyphicon glyphicon-comment"></span>
                            <a href=""  class="dropdown-toggle" data-toggle="dropdown">قسم قالوا عنا</a>
                            <ul class="drop_main_menu">
                                <li><a href="{{route('said.create')}}">إضافة تقييم جديد</a></li>
                                <li><a href="{{route('said.index')}}">عرض كل التقييمات</a></li>
                            </ul>
                    </li>


                    <li class="{{ Request::is('admin/statistic') ? 'active' : '' }}">
                        <span class="glyphicon glyphicon-align-right"></span>
                        <a href="{{route('show.admin.statistic')}}">إحصائيات</a>
                    </li>


                    <li class="{{ Request::is('admin/setting') ? 'active' : '' }}">
                        <span class="glyphicon glyphicon-cog"></span>
                        <a href="{{route('show.admin.setting')}}">إعدادت الموقع</a>
                    </li>


                    
                   
                    
                </ul>
            </div>
        </div>


        <!--/End side bar main menu-->

        <!--Start Main content container-->
            
            @yield('content')

        <!--/End body container section-->
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->


<script type="text/javascript" src="{{asset('admin_files/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('admin_files/js/bootstrap.min.js')}}"></script>

<script src="{{asset('admin_files/js/js.js')}}"></script>



     
        
<script src="{{asset('dist/js/fontawesome-iconpicker.js')}}"></script>


 <script>
            $(function() {
                $('.action-destroy').on('click', function() {
                    $.iconpicker.batch('.icp.iconpicker-element', 'destroy');
                });
                // Live binding of buttons
                $(document).on('click', '.action-placement', function(e) {
                    $('.action-placement').removeClass('active');
                    $(this).addClass('active');
                    $('.icp-opts').data('iconpicker').updatePlacement($(this).text());
                    e.preventDefault();
                    return false;
                });
                $('.action-create').on('click', function() {
                    $('.icp-auto').iconpicker();
                    
                    $('.icp-dd').iconpicker({
                        //title: 'Dropdown with picker',
                        //component:'.btn > i'
                    });
                    
                    $('.icp-glyphs').iconpicker({
                        title: 'Prepending glypghicons',
                        icons: $.merge(['glyphicon-home', 'glyphicon-repeat', 'glyphicon-search',
                            'glyphicon-arrow-left', 'glyphicon-arrow-right', 'glyphicon-star'], $.iconpicker.defaultOptions.icons),
                        fullClassFormatter: function(val){
                            if(val.match(/^fa-/)){
                                return 'fa '+val;
                            }else{
                                return 'glyphicon '+val;
                            }
                        }
                    });
                    $('.icp-opts').iconpicker({
                        title: 'With custom options',
                        icons: ['fa-github', 'fa-heart', 'fa-html5', 'fa-css3'],
                        selectedCustomClass: 'label label-success',
                        mustAccept: true,
                        placement: 'bottomRight',
                        showFooter: true,
                        // note that this is ignored cause we have an accept button:
                        hideOnSelect: true,
                        templates: {
                            footer: '<div class="popover-footer">' +
                                    '<div style="text-align:left; font-size:12px;">Placements: \n\
                    <a href="#" class=" action-placement">inline</a>\n\
                    <a href="#" class=" action-placement">topLeftCorner</a>\n\
                    <a href="#" class=" action-placement">topLeft</a>\n\
                    <a href="#" class=" action-placement">top</a>\n\
                    <a href="#" class=" action-placement">topRight</a>\n\
                    <a href="#" class=" action-placement">topRightCorner</a>\n\
                    <a href="#" class=" action-placement">rightTop</a>\n\
                    <a href="#" class=" action-placement">right</a>\n\
                    <a href="#" class=" action-placement">rightBottom</a>\n\
                    <a href="#" class=" action-placement">bottomRightCorner</a>\n\
                    <a href="#" class=" active action-placement">bottomRight</a>\n\
                    <a href="#" class=" action-placement">bottom</a>\n\
                    <a href="#" class=" action-placement">bottomLeft</a>\n\
                    <a href="#" class=" action-placement">bottomLeftCorner</a>\n\
                    <a href="#" class=" action-placement">leftBottom</a>\n\
                    <a href="#" class=" action-placement">left</a>\n\
                    <a href="#" class=" action-placement">leftTop</a>\n\
                    </div><hr></div>'}
                    }).data('iconpicker').show();
                }).trigger('click');


                // Events sample:
                // This event is only triggered when the actual input value is changed
                // by user interaction
                $('.icp').on('iconpickerSelected', function(e) {
                    $('.lead .picker-target').get(0).className = 'picker-target fa-3x ' +
                            e.iconpickerInstance.options.iconBaseClass + ' ' +
                            e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
                });
            });


        $('.icp').on('iconpickerSelected', function(event){
           
            var x = event.iconpickerValue;
           $("#icon").val(x);
        });
        </script>

       


</body>

</html>