@extends('layouts.admin')

@section('content')

        <!-- All Sliders -->

        <div class="main_content_container">
            <div class="main_container  main_menu_open">

                <!--Start system bath-->
                <div class="home_pass hidden-xs">
                    <ul>
                        <li class="bring_right"><span class="glyphicon glyphicon-home "></span></li>
                        <li class="bring_right"><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
                        <li class="bring_right"><a href="{{route('parteners.index')}}">عملائنا</a></li>
                    </ul>
                </div>
                <!--/End system bath-->

                <div class="page_content">
                    <h1 class="heading_title">عرض كل كل العملاء المضافين</h1>

                    @include('includes.errors')

                    <div class="wrap">
                        <table class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td style="width: 30% !important;">اسم العميل (العربية)</td>
                                <td>اسم العميل (English)</td>
                                <td>اسم العميل (French)</td>
                                <td>التحكم</td>
                            </tr>

                        @if(count($parteners) > 0)

                            <?php $no=1; ?>
                            @foreach($parteners as $part)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ unserialize($part->name)['ar']}}</td>

                                <td>{{ unserialize($part->name)['en']}}</td>
                                <td>{{ unserialize($part->name)['fr']}}</td>
                               
                                <td>
                                    
                                    <a href="{{route('parteners.edit',['id' => $part->id])}}" class="btn btn-info btn-xs" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span></a> 
                                   
                                    <button class="btn btn-danger btn-xs" data-title="Edit" data-toggle="modal" data-target="#deleteModal{{$part->id}}" ><span class="glyphicon glyphicon-trash"></span>
                                    </button> 
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div id="deleteModal{{$part->id}}" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">حذف الخدمة !</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>هل أنت متأكد من حذفك لهذه الخدمة</p>
                                  </div>
                                  <div class="modal-footer">

                                  <span>
                                     <form action="{{route('parteners.destroy',['id' => $part->id])}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit">حذف</button>
                                    </form>
                                  </span>  
                                    
                                  </div>
                                </div>

                              </div>
                            </div>
                            @endforeach
                            
                        @else

                        @endif
                        </table>

                        <nav class="text-center">
                            {{$parteners->links()}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>



@stop