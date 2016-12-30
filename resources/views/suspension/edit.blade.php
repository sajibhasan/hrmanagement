@extends('adminlayouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus"></i>New Suspension</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" >
                    {!! Form::model($suspension,['method'=>'PATCH','action'=>['SuspensionController@update',$suspension->id]])!!}

                    <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                        <label for="employeeid">EmployeeID:<span style="color:red;"> *</span></label>

                        {!!Form::select('user_id',$users,null,['class'=>'form-control','id'=>'employeeid','multiple'])!!}

                        @if ($errors->has('user_id'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('user_id') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('suspension_date') ? ' has-error' : '' }}">
                        <label for="dob">Suspension Date :</label>
                        {!! Form::date('suspension_date',null,['class'=>'date form-control','placeholder'=>'Enter Contest Date','id'=>"date"]) !!}
                        @if ($errors->has('suspension_date'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('suspension_date') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                        <label for="address">Reason :</label>
                        {!! Form::textarea('reason',null,['class'=>'form-control','placeholder'=>'Enter address','rows'=>"2",'id'=>"reason"]) !!}
                        @if ($errors->has('reason'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('reason') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                        <label for="dob">Duration :</label>
                        {!! Form::date('duration',null,['class'=>'date form-control','placeholder'=>'Enter Contest Date','id'=>"duration"]) !!}
                        @if ($errors->has('duration'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('duration') }}</strong>
                                </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success rite">Submit</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@endsection