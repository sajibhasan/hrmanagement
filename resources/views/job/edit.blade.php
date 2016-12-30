@extends('adminlayouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus"></i>New Job Opening</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" >
                    {!! Form::model($job,['method'=>'PATCH','action'=>['JobController@update',$job->id]])!!}
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                        <label for="name">Position:<span style="color:red;"> *</span></label>

                        {!! Form::text('position',null,['class'=>'form-control','placeholder'=>'Enter Name']) !!}

                        @if ($errors->has('position'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('position') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="qualification">Description:</label>
                        {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Enter Qualification','rows'=>"2"]) !!}
                        @if ($errors->has('description'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('post_date') ? ' has-error' : '' }}">
                        <label for="password">Post Date:</label>

                        {!! Form::date('post_date',null,['class'=>'date form-control','placeholder'=>'Enter Contest Date']) !!}
                        @if ($errors->has('post_date'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('post_date') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('last_date_to_apply') ? ' has-error' : '' }}">
                        <label for="password">Last Date To Apply:</label>

                        {!! Form::date('last_date_to_apply',null,['class'=>'date form-control','placeholder'=>'Enter Contest Date']) !!}
                        @if ($errors->has('last_date_to_apply'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('last_date_to_apply') }}</strong>
                                    </span>
                        @endif
                    </div>



                    <div class="form-group{{ $errors->has('close_date') ? ' has-error' : '' }}">
                        <label for="password">close Date:</label>

                        {!! Form::date('close_date',null,['class'=>'date form-control','placeholder'=>'Enter Contest Date']) !!}
                        @if ($errors->has('close_date'))
                            <span class="help-block">
                                <strong>{{ $errors->first('close_date') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                        <label for="name">Position:<span style="color:red;"> *</span></label>

                        {!! Form::text('contact',null,['class'=>'form-control','placeholder'=>'Enter Name']) !!}

                        @if ($errors->has('contact'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="name">Position:<span style="color:red;"> *</span></label>

                        {!! Form::text('address',null,['class'=>'form-control','placeholder'=>'Enter Name']) !!}

                        @if ($errors->has('address'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
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
    </div>

@endsection