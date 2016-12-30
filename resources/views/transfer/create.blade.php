@extends('adminlayouts.master')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus"></i>New Transfer</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" >
                    {!! Form::open(['url'=>['/admin/transfers']]) !!}
                        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <label for="employeeid">EmployeeID:<span style="color:red;"> *</span></label>

                            {!!Form::select('user_id',$users,null,['class'=>'form-control','multiple'])!!}

                            @if ($errors->has('user_id'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('transfer_date') ? ' has-error' : '' }}">
                            <label for="dob">Transfer Date :</label>
                            {!! Form::date('transfer_date',null,['class'=>'date form-control','placeholder'=>'Enter Contest Date']) !!}
                            @if ($errors->has('transfer_date'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('transfer_date') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('previous_campus') ? ' has-error' : '' }}">
                            <label for="Designation">Previous campus :</label>
                            {!! Form::text('previous_campus',null,['class'=>'form-control','placeholder'=>'Enter Previous Department']) !!}
                            @if ($errors->has('previous_campus'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('previous_campus') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('present_campus') ? ' has-error' : '' }}">
                            <label for="Designation">Present Campus: :</label>
                            {!! Form::text('present_campus',null,['class'=>'form-control','placeholder'=>'Enter Previous Department']) !!}
                            @if ($errors->has('present_campus'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('present_campus') }}</strong>
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