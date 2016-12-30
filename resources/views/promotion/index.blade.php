@extends('adminlayouts.master')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Promotions</h1>
                </div>
            </div>

            <div class="row" >
                <div class="col-lg-12" >
                    <a href='{{ url('admin/promotions/create') }}' class="btn btn-emp btn-info" role="button"> <i class="fa fa-plus"></i>
                        <b>New Promotion</b></a>
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
                                    <th><span>Date of Promotion</span></th>
                                    <th><span>Designation</span></th>
                                    <th><span>Department</span></th>
                                    <th><span>salary</span></th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($promotions as $promotion)
                                <tr>

                                    <td>
                                        {{$promotion->user->employeeid}}

                                    </td>
                                    <td>{{$promotion->user->name}}</td>
                                    <td>{{$promotion->Promotion_Date}}</td>
                                    <td>Previous: <b> {{$promotion->previous_designation}} </b><br/>Present: <b> {{$promotion->present_designation}}  </b> </td>
                                    <td>Previous: <b> {{$promotion->previous_department}} </b><br/>Present: <b> {{$promotion->present_department}} </b> </td>
                                    <td>Previous: <b> {{$promotion->previous_salary}} </b><br/>Present: <b> {{$promotion->present_salary}} </b> </td>
                                    <td class="text-center" style="width: 20%;">
                                        <a href="#" class="table-link">
           <span class="fa-stack">
               <i class="fa fa-square fa-stack-2x"></i>
               <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
           </span>
                                        </a>
                                        <a href="{{ URL::to('admin/promotions/'.$promotion->id.'/edit') }}" class="table-link">
             <span class="fa-stack">
                 <i class="fa fa-square fa-stack-2x"></i>
                 <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
             </span>
                                        </a>
                                        <a href="{{ action('PromotionController@delete',$promotion->id) }}" class="table-link danger">
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