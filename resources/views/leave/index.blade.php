@extends('adminlayouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Leave Applications</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row" >
                <div class="col-lg-12" >
                    <a href="{{ url('admin/leaves/create') }}" class="btn btn-emp btn-info" role="button"> <i class="fa fa-plus"></i>
                        <b>New Leave Type</b></a>
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
                                    <th><span>From Date</span></th>
                                    <th><span>To Date</span></th>
                                    <th><span>Leave Type</span></th>
                                    <th><span>Reason</span></th>
                                    <th><span>status</span></th>
                                    <th class="text-center"><span>Ation</span></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($applications as $application)
                                <tr>

                                    <td>
                                        {{$application->user->employeeid}}
                                    </td>
                                    <td>{{$application->user->name}}</td>
                                    <td>{{$application->leave_from}}</td>
                                    <td>{{$application->leave_to}}</td>
                                    <td>{{$application->leave_type}}</td>
                                    <td>{{$application->leave_reason}}</td>
                                    @if($application->status)
                                        <td class="text-center">
                                            <a href="#"><span class="label label-default">active</span></a>
                                        </td>
                                    @else
                                        <td class="text-center">
                                            <a href = "{{ URL::to('/applications/active/'.$application->id) }}"><span class="label label-default">pending</span></a>
                                        </td>

                                    @endif

                                    <td class="text-center" style="width: 20%;">

                                        <a href = "{{ URL::to('admin/leaves/'.$application->id) }}" class="table-link danger">
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