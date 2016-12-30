@extends('adminlayouts.master')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Suspensions</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row" >
                <div class="col-lg-12" >
                    <a href='{{ url('admin/suspensions/create') }}'  class="btn btn-emp btn-info" role="button"> <i class="fa fa-plus"></i>
                        <b>New Suspension</b></a>
                    <div/>
                </div>

                <br/>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th><span>EmployeeID</span></th>
                                    <th><span>Name</span></th>
                                    <th><span>Date</span></th>
                                    <th><span>Reason</span></th>
                                    <th><span>Duration</span></th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($suspensions as $suspension)
                                <tr>
                                    <td>
                                        {{$suspension->user->employeeid}}
                                    </td>
                                    <td>{{$suspension->user->name}}</td>
                                    <td>{{$suspension->suspension_date}}</td>
                                    <td>{{$suspension->reason}}</td>
                                    <td>{{$suspension->suspension_date}} - </br>{{$suspension->duration}}</td>
                                    <td class="text-center" style="width: 20%;">
                                        <a href="#" class="table-link">
               <span class="fa-stack">
               <i class="fa fa-square fa-stack-2x"></i>
               <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
              </span>
                                        </a>
                                        <a href="{{ URL::to('admin/suspensions/'.$suspension->id.'/edit') }}" class="table-link">
             <span class="fa-stack">
                 <i class="fa fa-square fa-stack-2x"></i>
                 <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
             </span>
                                        </a>
                                        <a href="{{ action('SuspensionController@delete',$suspension->id) }}" class="table-link danger">
                   <span class="fa-stack">
                       <i class="fa fa-square fa-stack-2x"></i>
                       <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                   </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

@endsection