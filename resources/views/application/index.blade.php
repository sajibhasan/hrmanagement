@extends('layouts.master')
@section('content')


    <div id="page-wrapper">

        <div class="container-fluid">
            </br></br>
            <div class="row">

                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><span>Applied Date</span></th>
                                <th><span>Leave Duration</span></th>
                                <th><span>Leave Type</span></th>
                                <th><span>Reason</span></th>
                                <th class="text-center"><span>Status</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($applications as $application)
                            <tr>
                                <td>{{$application->created_at}}</td>
                                <td>{{$application->leave_from}} - {{$application->leave_to}}</td>
                                <td>{{$application->leave_reason}}</td>
                                <td>{{$application->leave_type}}</td>
                                @if($application->status)
                                    <td class="text-center"> <span class="label label-info">approved</span> </td>
                                @else
                                    <td class="text-center"> <span class="label label-info">rejected</span> </td>

                                @endif

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </br></br>
                    </div>

                </div>

            </div>
            <br/><br/>
        </div>
        <!-- body container -->

    </div>
    <!-- /.page wrapper -->


@endsection