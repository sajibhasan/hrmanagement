@extends('adminlayouts.master')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Departments</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row" >
                <divn class="col-lg-12" >
                    <a href="{{ url('admin/departments/create') }}" class="btn btn-emp btn-info" role="button"> <i class="fa fa-plus"></i>
                        <b>Add Department</b></a>
                    <div/>
            </div>

            <br/>

            <div class="row">

                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th><span>No.</span></th>
                                <center><th><span>Department Name</span></th></center>
                                <th><span>Action</span></th>
                            </tr>
                            <?php $i=1; ?>
                            </thead>
                            <tbody>
                            @foreach($departments as $department)
                            <tr>

                                <td>
                                    <?php echo $i++ ?>
                                </td>
                                <td>{{$department->department}}</td>

                                <td class="text-center" style="width: 20%;">

                                    <a href="{{ URL::to('admin/departments/'.$department->id.'/edit') }}" class="table-link">
             <span class="fa-stack">
                 <i class="fa fa-square fa-stack-2x"></i>
                 <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
             </span>
                                    </a>
                                    <a href="{{ action('DepartmentController@delete', $department->id) }}" class="table-link danger">
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