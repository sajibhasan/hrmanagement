@extends('adminlayouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Notice Board</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row" >
                <div class="col-lg-12" >
                    <a href='{{ url('admin/notices/create') }}' class="btn btn-emp btn-info" role="button"> <i class="fa fa-plus"></i>
                        <b>Add New Notice</b></a>
                    <div/>
                </div>

                <br/>
                <?php $i=1 ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th><span>No.</span></th>
                                    <th><span>Date</span></th>
                                    <th><span>Title</span></th>
                                    <th><span>Description</span></th>
                                    <th class="text-center"><span>Status</span></th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($notices as $notice)
                                <tr>
                                    <td>
                                        {{$i++}}
                                    </td>
                                    <td>
                                        {{date('d-M-Y',strtotime($notice->created_at))}}
                                    </td>
                                    <td>{{$notice->notice_title}}</td>
                                    <td><p>{{$notice->description}} </p></td>
                                    <td class="text-center">
                                        <span class="label label-default">active</span>
                                    </td>
                                    <td class="text-center" style="width: 20%;">
                                        <a href="#" class="table-link">
                       <span class="fa-stack">
                           <i class="fa fa-square fa-stack-2x"></i>
                           <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                       </span>
                                        </a>
                                        <a href="{{ URL::to('admin/notices/'.$notice->id.'/edit') }}" class="table-link">
                         <span class="fa-stack">
                             <i class="fa fa-square fa-stack-2x"></i>
                             <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                         </span>
                                        </a>
                                        <a href="{{ action('NoticeController@delete',$notice->id) }}" class="table-link danger">
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
    </div>

@endsection