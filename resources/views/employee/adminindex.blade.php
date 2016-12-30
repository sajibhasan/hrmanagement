@extends('adminlayouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employees</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row" >
                <div class="col-lg-12" >
                    <a href="{{ url('admin/employees/create') }}" class="btn btn-emp btn-info" role="button"> <i class="fa fa-plus"></i>
                        <b>Add New Employee</b></a>
                </div>
            </div>
            <br/>

            </br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><span>EmployeeID</span></th>
                                <th><span>Image</span></th>
                                <th><span>Name</span></th>
                                <th><span>Designation</span></th>
                                <th><span>Joining Date</span></th>
                                <th><span>Phone No.</span></th>
                                <th class="text-center"><span>Status</span></th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($users as $user)
                            <tr>

                                <td>
                                    {{$user->employeeid}}
                                </td>
                                <td>
                                <img height="50 px" src="{{ URL::to('/images/'. $user->image) }}" alt="">
                                </td>
                                <td>{{$user->name}}</td>
                                <td>Department: <b> {{$user->department}} </b><br/>Designation: <b> {{$user->designation}} </b> </td>
                                <td>{{$user->dateofjoining}}</td>
                                <td>
                                    {{$user->phone}}
                                </td>
                                @if($user->optradio)
                                <td class="text-center">
                                    <a href = "{{ URL::to('admin/employees/pending/'.$user->id) }}"><span class="label label-default">active</span></a>
                                </td>
                                    @else
                                        <td class="text-center">
                                            <a href = "{{ URL::to('admin/employees/active/'.$user->id) }}"><span class="label label-default">pending</span></a>
                                        </td>

                                    @endif
                                <td class="text-center" style="width: 20%;">
                                    <a href="#" class="table-link">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                            </span>
                                    </a>
                                    <a href="{{ URL::to('admin/employees/'.$user->id.'/edit') }}" class="table-link">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                            </span>
                                    </a>
                                    <a href="{{ action('EmployeeController@delete', $user->id) }}" class="table-link danger">
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
@endsection