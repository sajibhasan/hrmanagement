@extends('layouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">
            </br></br>
            <div class="row">
                <div class="col-lg-4">
                    <div class="table-responsive text-center">
                        <div class="col-lg-8 col-lg-offset-2 init">
                            <table>
                                @foreach ($users as $user)
                                    <tbody>
                                    <tr>
                                        <td><img height="100 px" src="{{ URL::to('/images/'. $user->image) }}" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td><h3>{{$user->name}}</h3></td>
                                    </tr>
                                    <tr>
                                        <td><h4>{{$user->designation}}</h4></td>
                                    </tr>
                                    <tr>
                                        <td><h4>Joining: {{date('d-M-Y',strtotime($user->dateofjoining))}}</h4></td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            </br>
                            </br>
                        </div>
                    </div>

                    <!--employee image-->

                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Qualification</h3>
                        </div>
                        <div class="panel-body">
                            @foreach ($users as $user)
                            <p>{{$user->qualification}} </p>
                                @endforeach
                        </div>
                    </div>
                    <!-- Academic information -->

                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Promotions</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach ($promotions as $promotion)
                                        <tr>
                                            <td>Date</td>
                                            <td>{{$promotion->Promotion_Date}}</td>
                                        </tr>
                                        <tr>
                                            <td>previous Depratment:</br>present Department:</td>
                                            <td>{{$promotion->previous_department}}</br>{{$promotion->present_department}}</td>
                                        </tr>
                                        <tr>
                                            <td>previous Designation:</br>present Designation:</td>
                                            <td>{{$promotion->previous_designation}}</br>{{$promotion->present_designation}}</td>
                                        </tr>
                                        <tr>
                                            <td>previous salary:</br>present salary:</td>
                                            <td>{{$promotion->previous_salary}}</br>{{$promotion->present_salary}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- promotions -->


                </div>
                <!-- col-lg-first -->


                <div class="col-lg-4">


                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Personal Information</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach ($users as $user)


                                    <tr>
                                        <td>Date Of Birth : </td>
                                        <td>{{$user->date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Gender : </td>
                                        <td>{{$user->date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone : </td>
                                        <td>{{$user->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address : </td>
                                        <td>{{$user->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Permanent Address : </td>
                                        <td>{{$user->paddress}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--Personal Information-->

                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Company Profile</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>EmployeeID : </td>
                                            <td>{{$user->employeeid}}</td>
                                        </tr>
                                        <tr>
                                            <td>Department : </td>
                                            <td>{{$user->department}}</td>
                                        </tr>
                                        <tr>
                                            <td>Designation : </td>
                                            <td>{{$user->designation}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Company Profile -->

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Salary Details</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>Salary : </td>
                                            <td>{{$user->Salary}}</td>
                                        </tr>
                                        <tr>
                                            <td>Bank Name : </td>
                                            <td>{{$user->bankname}}</td>
                                        </tr>
                                        <tr>
                                            <td>Account Number : </td>
                                            <td>{{$user->bankname}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Salary Details -->


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Suspension</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach ($suspensions as $suspension)
                                    <tr>
                                        <td>Date : </td>
                                        <td>{{$suspension->suspension_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Reason : </td>
                                        <td>{{$suspension->reason}}</td>
                                    </tr>
                                    <tr>
                                        <td>Duration : </td>
                                        <td>{{$suspension->duration}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Suspension -->

                </div>
                <!-- col-lg-second -->


                <div class="col-lg-4">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Notice Board</h3>
                        </div>
                        <div class="panel-body notice">
                            @foreach ($notices as $notice)
                            <h3>{{date('d-M-Y',strtotime($notice->created_at))}}</h3>
                            <h4>{{$notice->notice_title}}</h4>
                            <p>{{str_limit(strip_tags($notice->description), $limit = 95, $end = '...')}}</p>
                            <hr>
                            @endforeach

                            <a href="{{ url('/notices') }}" class="btn btn-info btn-block" role="button">Read More</a>

                        </div>
                    </div>
                    <!-- Notice board -->


                    <!-- Leave -->


                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transfer</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach ($transfers as $transfer)
                                        <tr>
                                            <td>Date : </td>
                                            <td>{{$transfer->transfer_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>Previous Campus : </td>
                                            <td>{{$transfer->previous_campus}}</td>
                                        </tr>
                                        <tr>
                                            <td>Present Campus</td>
                                            <td>{{$transfer->present_campus}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Transfer -->


                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Retirement</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach ($retirements as $retirement)
                                    <tr>
                                        <td>Retirement Date :</td>
                                        <td>{{$retirement->retirement_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Award</td>
                                        <td>{{$retirement->award}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Retirement -->


                </div>
                <!-- col-lg-last -->


            </div>
            <!-- row -->

        </div>
        <!-- body container -->

    </div>
@endsection