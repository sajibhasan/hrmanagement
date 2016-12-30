@extends('adminlayouts.master')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus"></i>Create Employee</h1>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-12" >
                    {!! Form::model($user,['method'=>'PATCH','action'=>['EmployeeController@update',$user->id], 'files' => true])!!}
                    {!! csrf_field() !!}
                    <div class="row" >

                        <div class="col-lg-5 col-lg-offset-1" >
                            <div class="panel panel-primary">
                                <div class="panel-heading">Personal Details</div>
                                <div class="panel-body">
                                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label for="image">Photo:</label>
                                        <input type="file" class="form-control"  name="image" id="image">
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name">Name:<span style="color:red;"> *</span></label>

                                        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Name']) !!}

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                                        <label for="dob">Date Of Birth:</label>
                                        {!! Form::date('date',null,['class'=>'date form-control','placeholder'=>'Enter Contest Date']) !!}
                                        @if ($errors->has('date'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('date') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                        <label for="gender">Gender:</label>
                                        {!! Form::text('gender',null,['class'=>'form-control','placeholder'=>'Enter Gender']) !!}
                                        @if ($errors->has('gender'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="phone">Phone:</label>
                                        {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Enter phone Number']) !!}
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('qualification') ? ' has-error' : '' }}">
                                        <label for="qualification">Qualification:</label>
                                        {!! Form::textarea('qualification',null,['class'=>'form-control','placeholder'=>'Enter Qualification','rows'=>"2"]) !!}
                                        @if ($errors->has('qualification'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('qualification') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label for="address">Address:</label>
                                        {!! Form::textarea('address',null,['class'=>'form-control','placeholder'=>'Enter address','rows'=>"2"]) !!}
                                        @if ($errors->has('address'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('paddress') ? ' has-error' : '' }}">
                                        <label for="paddress">Permanent Address:</label>
                                        {!! Form::textarea('paddress',null,['class'=>'form-control','placeholder'=>'Enter address','rows'=>"2"]) !!}
                                        @if ($errors->has('paddress'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('paddress') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div><!--first col-lg-6 first panel finish-->

                            <div class="panel panel-red">
                                <div class="panel-heading">Account Login</div>
                                <div class="panel-body">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Login Email:<span style="color:red;"> *</span></label>
                                        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter email']) !!}
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                            </div><!--first col-lg-6 second panel finish-->
                        </div> <!--first col-lg-6 finish-->

                        <div class="col-lg-5 " >
                            <div class="panel panel-red">
                                <div class="panel-heading">Company Details</div>
                                <div class="panel-body">


                                        {!! Form::hidden('employeeid',null,['class'=>'form-control','placeholder'=>'Enter Gender']) !!}

                                    <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                                        <label for="department">Department:</label>
                                        {!!Form::select('department',$departments,null,['class'=>'form-control','multiple'])!!}
                                        @if ($errors->has('department'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('department') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                                        <label for="Designation">Designation:</label>
                                        {!!Form::select('designation',$designations,null,['class'=>'form-control','multiple'])!!}
                                        @if ($errors->has('designation'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('designation') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('dateofjoining') ? ' has-error' : '' }}">
                                        <label for="password">Date of joining:</label>

                                        {!! Form::date('dateofjoining',null,['class'=>'date form-control','placeholder'=>'Enter Contest Date']) !!}
                                        @if ($errors->has('dateofjoining'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('dateofjoining') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Status: </label>
                                        <label class="radio-inline"> {!!Form::radio('optradio', 1, true)!!} Active</label>
                                        <label class="radio-inline"> {!!Form::radio('optradio', 0, false)!!} Not Active</label>
                                    </div>
                                </div>
                            </div> <!--second col-lg-6 first panel finish-->

                            <div class="panel panel-yellow">
                                <div class="panel-heading">Salary Details</div>
                                <div class="panel-body">
                                    <div class="form-group{{ $errors->has('Salary') ? ' has-error' : '' }}">
                                        <label for="Salary">Salary:</label>

                                        {!! Form::text('Salary',null,['class'=>'form-control','placeholder'=>'Enter Salary']) !!}
                                        @if ($errors->has('Salary'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('Salary') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('bankname') ? ' has-error' : '' }}">
                                        <label for="bankname">Bank Name:</label>
                                        {!! Form::text('bankname',null,['class'=>'form-control','placeholder'=>'Enter bankname']) !!}
                                        @if ($errors->has('bankname'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('bankname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('accountholder') ? ' has-error' : '' }}">
                                        <label for="accountholder">Account Holder Name:</label>

                                        {!! Form::text('accountholder',null,['class'=>'form-control','placeholder'=>'Enter bankname']) !!}
                                        @if ($errors->has('accountholder'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('accountholder') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('accountnum') ? ' has-error' : '' }}">
                                        <label for="accountnum">Account Number:</label>
                                        {!! Form::text('accountnum',null,['class'=>'form-control','placeholder'=>'Enter bankname']) !!}
                                        @if ($errors->has('accountnum'))
                                            <span class="help-block">
                                                  <strong>{{ $errors->first('accountnum') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div><!--second col-lg-6 second panel finish-->
                        </div><!--second col-lg-6-->
                    </div><!--form first row finish-->

                    <div class="row" >
                        <div class="col-lg-10 col-lg-offset-1" >

                            <button type="submit" class="btn btn-success rite">Submit</button>
                        </div>
                    </div><!--form second row-->

                    {!! Form::close() !!}
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

@endsection