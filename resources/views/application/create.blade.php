@extends('layouts.master')
@section('content')


    <div id="page-wrapper">

        <div class="container-fluid">
            </br></br>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3" >
                    {!! Form::open(['url'=>['/applications']]) !!}

                    <div class="form-group{{ $errors->has('leave_type') ? ' has-error' : '' }}">
                        <label for="name">Leave Type:<span style="color:red;"> *</span></label>

                        {!!Form::select('leave_type',$leaves,null,['class'=>'form-control','multiple'])!!}

                        @if ($errors->has('leave_type'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('leave_type') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('leave_reason') ? ' has-error' : '' }}">
                        <label for="name">Leave Reason:<span style="color:red;"> *</span></label>

                        {!! Form::textarea('leave_reason',null,['class'=>'form-control','placeholder'=>'Enter Reason']) !!}

                        @if ($errors->has('leave_reason'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('leave_reason') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('leave_from') ? ' has-error' : '' }}">
                        <label for="password">Leave From:</label>

                        {!! Form::date('leave_from',null,['class'=>'date form-control','placeholder'=>'Enter  Date']) !!}
                        @if ($errors->has('leave_from'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('leave_from') }}</strong>
                            </span>
                        @endif
                    </div>


                    <div class="form-group{{ $errors->has('leave_to') ? ' has-error' : '' }}">
                        <label for="password">Leave To :</label>

                        {!! Form::date('leave_to',null,['class'=>'date form-control','placeholder'=>'Enter  Date']) !!}
                        @if ($errors->has('leave_to'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('leave_to') }}</strong>
                            </span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-success rite">Submit</button>
                    {!! Form::close() !!}
                </div>
            </div>
            <br/><br/>
        </div>
        <!-- body container -->

    </div>
    <!-- /.page wrapper -->


@endsection