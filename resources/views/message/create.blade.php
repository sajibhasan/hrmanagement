@extends('layouts.master')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">
            </br></br>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3" >
                    {!! Form::open(['url'=>['/messages']]) !!}

                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        <label for="qualification">Message : </label>
                        {!! Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Enter Message','rows'=>"15"]) !!}
                        @if ($errors->has('body'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
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