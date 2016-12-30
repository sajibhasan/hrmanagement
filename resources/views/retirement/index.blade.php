@extends('adminlayouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Retirements</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row" >
                <div class="col-lg-12" >
                    <a href='{{ url('admin/retirements/create') }}' class="btn btn-emp btn-info" role="button"> <i class="fa fa-plus"></i>
                        <b>New Retirement</b></a>
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
                               <!-- <th><span>Designation</span></th>
                                <th><span>Age</span></th>
                                <th><span>Service</span></th> -->
                                <th><span>Award</span></th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($retirements as $retirement)
                            <tr>
                                <td>
                                    {{$retirement->user->employeeid}}
                                </td>
                                <td> {{$retirement->user->name}}</td>
                                <td>{{$retirement->retirement_date}}</td>
                               <!-- <td>Department: <b> Cse </b><br/>Designation: <b> Professior </b> </td>
                                <td>57 yr</td>
                                <td>20 yr</td> -->
                                <td>{{$retirement->award}} </td>
                                <td class="text-center" style="width: 20%;">
                                    <a href="#" class="table-link">
               <span class="fa-stack">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
               </span>
                                    </a>
                                    <a href="{{ URL::to('admin/retirements/'.$retirement->id.'/edit') }}" class="table-link">
               <span class="fa-stack">
                  <i class="fa fa-square fa-stack-2x"></i>
                  <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
               </span>
                                    </a>
                                    <a href="{{ action('RetirementController@delete',$retirement->id) }}" class="table-link danger">
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