@extends('adminlayouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Job Opening</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row" >
                <div class="col-lg-12" >
                    <a href="{{ url('admin/jobs/create') }}" class="btn btn-emp btn-info" role="button"> <i class="fa fa-plus"></i>
                        <b>Add New Job</b></a>
                    <div/>
                </div>

                <br/>
                <?php $i=1;?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th><span>No.</span></th>
                                    <th><span>Position</span></th>
                                    <th><span>PostDate</span></th>
                                    <th><span>Last Date To Apply</span></th>
                                    <th><span>Close Date</span></th>
                                    <th class="text-center"><span>Status</span></th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($jobs as $job)
                                <tr>
                                    <td>
                                        {{$i++}}
                                    </td>
                                    <td>{{$job->position}}</td>
                                    <td>{{$job->post_date}}</td>
                                    <td>{{$job->last_date_to_apply}}</td>
                                    <td>{{$job->close_date}}</td>
                                    <td class="text-center">
                                        <span class="label label-default">active</span>
                                    </td>
                                    <td class="text-center" style="width: 20%;">

                                        <a href="{{ URL::to('admin/jobs/'.$job->id.'/edit') }}" class="table-link">
             <span class="fa-stack">
                 <i class="fa fa-square fa-stack-2x"></i>
                 <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
             </span>
                                        </a>
                                        <a href="{{ action('JobController@delete', $job->id) }}" class="table-link danger">
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