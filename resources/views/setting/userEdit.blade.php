@extends('layouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Settings</h1>
                </div>
            </div>
            </br></br>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-1" style="background-color:#f2f2f2">
                    <h1 class="page-header" style="font-size:15px;color:red;font-weight:600">Login Details</h1>
                    {!! Form::open(['url'=>['/admin/settings/user/updatedetail']]) !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Name:<span style="color:red;"> *</span></label>

                        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Name']) !!}

                        @if ($errors->has('name'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Login Email:<span style="color:red;"> *</span></label>
                        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter email']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success rite">Update</button>
                    {!! Form::close() !!}
                </div>


                <div class="col-lg-4 col-lg-offset-1" style="background-color:#f2f2f2" >
                    <h1 class="page-header" style="font-size:15px;color:red;font-weight:600">Change Password</h1>
                    {!! Form::open(['url'=>['admin/settings/user/updatepassword']]) !!}

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter PassWord">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password">Confirm Password :</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Enter PassWord">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success rite">Update</button>
                    {!! Form::close() !!}
                </div>
            </div>



            <br/>

            <div class="row">

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection