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
                    {!! Form::open(['url'=>['admin/designations']]) !!}


                    <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">
                        <label for="name">Department:<span style="color:red;"> *</span></label>

                         <select name="department" id="department" class="form-control input-sm">
                            <option value="">--- Select Department ---</option>
                                @foreach($allDepartment as $department)
                                <option value="{{ $department->id }}">{{ $department->department }}</option>
                               @endforeach
                              </select>

                        @if ($errors->has('department_id'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('department_id') }}</strong>
                                </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                        <label for="name">Designation:<span style="color:red;"> *</span></label>

                        <!--{!! Form::text('designation',null,['class'=>'form-control','placeholder'=>'Enter Designation']) !!}-->
                         <select name="designation" class="form-control"></select>

                        @if ($errors->has('designation'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('designation') }}</strong>
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
@include('ajaxwork.ajaxcall')
@endsection