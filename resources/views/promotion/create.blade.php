@extends('adminlayouts.master')
@section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus"></i>New Promotion</h1>
                </div>                  <!-- /.col-lg-12 -->
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" >
                    {!! Form::open(['url'=>['/admin/promotions']]) !!}
                        <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                            <label for="employeeid">EmployeeID:<span style="color:red;"> *</span></label>

                            {!!Form::select('user_id',$users,null,['class'=>'form-control','multiple'])!!}

                            @if ($errors->has('user_id'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('user_id') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('Promotion_Date') ? ' has-error' : '' }}">
                            <label for="dob">Promotion Date :</label>
                            {!! Form::date('Promotion_Date',null,['class'=>'date form-control','placeholder'=>'Enter Contest Date']) !!}
                            @if ($errors->has('Promotion_Date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Promotion_Date') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('previous_department') ? ' has-error' : '' }}">
                            <label for="Designation">Previous Department:</label>
                            {!! Form::text('previous_department',null,['class'=>'form-control','placeholder'=>'Enter Previous Department']) !!}
                            @if ($errors->has('previous_department'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('previous_department') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('present_department') ? ' has-error' : '' }}">
                            <label for="Designation">Present Department :</label>
                            {!! Form::text('present_department',null,['class'=>'form-control','placeholder'=>'Enter Previous Department']) !!}
                            @if ($errors->has('present_department'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('present_department') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('previous_designation') ? ' has-error' : '' }}">
                            <label for="Designation">Previous Designation:</label>
                            {!! Form::text('previous_designation',null,['class'=>'form-control','placeholder'=>'Enter Previous Department']) !!}
                            @if ($errors->has('previous_designation'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('previous_designation') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('present_designation') ? ' has-error' : '' }}">
                            <label for="Designation">Present Designation : </label>
                            {!! Form::text('present_designation',null,['class'=>'form-control','placeholder'=>'Enter Previous Department']) !!}
                            @if ($errors->has('present_designation'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('present_designation') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('previous_salary') ? ' has-error' : '' }}">
                            <label for="Designation">Previous Salary:</label>
                            {!! Form::text('previous_salary',null,['class'=>'form-control','placeholder'=>'Enter Previous Department']) !!}
                            @if ($errors->has('previous_salary'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('previous_salary') }}</strong>
                                </span>
                            @endif
                        </div>



                        <div class="form-group{{ $errors->has('present_salary') ? ' has-error' : '' }}">
                            <label for="Designation">Present Salary :</label>
                            {!! Form::text('present_salary',null,['class'=>'form-control','placeholder'=>'Enter Previous Department']) !!}
                            @if ($errors->has('present_salary'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('present_salary') }}</strong>
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