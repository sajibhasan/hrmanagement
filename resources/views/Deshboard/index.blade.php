@extends('adminlayouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <br/>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$totaluser}}</div>
                                    <div>Total Employees</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('admin/employees') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-coffee fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$totaljob}}</div>
                                    <div>Job Applications</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('admin/jobs') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-plane fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$app}}</div>
                                    <div>Leave Applications</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('admin/leaves') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            </br></br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading"><b>Make a Quick Notice</b></div>
                        <div class="panel-body">
                            {!! Form::open(['url'=>['admin/dashboard/notice']]) !!}

                            <div class="form-group{{ $errors->has('notice_title') ? ' has-error' : '' }}">
                                <label for="Designation">Notice Title :</label>
                                {!! Form::text('notice_title',null,['class'=>'form-control','placeholder'=>'Enter Previous Department']) !!}
                                @if ($errors->has('notice_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('notice_title') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="address">Description :</label>
                                {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Enter address','rows'=>"10",'id'=>"reason"]) !!}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-success rite">Submit</button>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div>

                </div>
                <!-- /.container-fluid -->

            </div>
         </div>
    </div>
@endsection