@extends('layouts.master')
@section('content')



<div id="page-wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">
            </br></br>
            <div class="row">
                <div class="panel ">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-list fa-fw"></i> New Jobs</h3>
                    </div>
                    <div class="panel-body ">
                        @foreach($jobs as $job)
                        <h3>{{$job->position}}</h3>
                        <h4>Last Date to Apply: {{$job->last_date_to_apply}} </h4>
                        <p>{{$job->description}}</p>
                        <p>Address: {{$job->address}}</p>
                        <p>Contact: {{$job->contact}}</p>
                        <hr>

                        @endforeach
                    </div>
                </div>

            </div>
            <br/><br/>
        </div>
        <!-- body container -->

    </div>
    <!-- /.page wrapper -->

</div>
<!-- /.page wrapper -->
@endsection