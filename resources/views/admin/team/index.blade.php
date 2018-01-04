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
                        <li class="bring_right"><a href="{{route('team.index')}}">فريق العمل</a></li>
                    </ul>
                </div>
                <!--/End system bath-->

                <div class="page_content">
                    <h1 class="heading_title">عرض كل الأعضاء المضافين</h1>

                    @include('includes.errors')

                    <div class="wrap">
                        <table class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>الصورة</td>
                                <td>الاسم كاملاً (العربية)</td>
                                <td>الاسم كاملاً(English)</td>
                                <td>الاسم كاملاً(French)</td>
                                <td>التحكم</td>
                            </tr>

                        @if(count($teams) > 0)

                            <?php $no=1; ?>
                            @foreach($teams as $team)
                            <tr>
                                <td>{{$no++}}</td>
                                <td><img src="{{$team->image}}" class="img-rounded user_thumb"></td>
                                <td>{{ unserialize($team->name)['ar']}}</td>

                                <td>{{ unserialize($team->name)['en']}}</td>
                                <td>{{ unserialize($team->name)['fr']}}</td>
                               
                                <td>
                                    
                                    <a href="{{route('team.edit',['id' => $team->id])}}" class="btn btn-info btn-xs" data-title="Edit"><span class="glyphicon glyphicon-pencil"></span></a> 
                                   
                                    <button class="btn btn-danger btn-xs" data-title="Edit" data-toggle="modal" data-target="#deleteModal{{$team->id}}" ><span class="glyphicon glyphicon-trash"></span>
                                    </button> 
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div id="deleteModal{{$team->id}}" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">حذف العضو !</h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>هل أنت متأكد من حذفك لهذه العضو من الفريق</p>
                                  </div>
                                  <div class="modal-footer">

                                  <span>
                                     <form action="{{route('team.destroy',['id' => $team->id])}}" method="post">
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
                            {{$teams->links()}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>



@stop