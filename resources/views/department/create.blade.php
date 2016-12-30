@extends('adminlayouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus"></i>Department Add</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br/>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" >
                    {!! Form::open(['url'=>['/admin/departments']]) !!}

                    <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                        <label for="name">Department:<span style="color:red;"> *</span></label>

                        {!! Form::text('department',null,['class'=>'form-control','placeholder'=>'Enter department']) !!}

                        @if ($errors->has('department'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('department') }}</strong>
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