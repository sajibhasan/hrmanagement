@extends('adminlayouts.master')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus"></i>Notice Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <br/>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" >
                    {!! Form::open(['url'=>['admin/notices']]) !!}

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
        <!-- /.container-fluid -->

    </div>

@endsection