@extends('adminlayouts.master')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus"></i>New Retirement</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" >
                    {!! Form::open(['url'=>['admin/retirements']]) !!}
                        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <label for="employeeid">EmployeeID:<span style="color:red;"> *</span></label>

                            {!!Form::select('user_id',$users,null,['class'=>'form-control','id'=>'employeeid','multiple'])!!}

                            @if ($errors->has('user_id'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('retirement_date') ? ' has-error' : '' }}">
                            <label for="dob">Retirement Date :</label>
                            {!! Form::date('retirement_date',null,['class'=>'date form-control','placeholder'=>'Enter Retirement Date','id'=>"date"]) !!}
                            @if ($errors->has('retirement_date'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('retirement_date') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('award') ? ' has-error' : '' }}">
                            <label for="Designation">Award :</label>
                            {!! Form::text('award',null,['class'=>'form-control','placeholder'=>'Enter Previous Department']) !!}
                            @if ($errors->has('award'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('award') }}</strong>
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

@endsection