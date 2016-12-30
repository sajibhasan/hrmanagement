@extends('adminlayouts.master')
@section('content')
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-plus"></i>New Leave Type</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <br/>

            <div class="row">

                <div class="col-lg-4 col-lg-offset-4" >

                    <div class="controls">
                        {!! Form::open(['url'=>['admin/leaves'],'autocomplete'=>"off"]) !!}

                            <label class="control-label" for="leavetype">Leave Type:</label>
                        @if($errors->has())
                            @foreach ($errors->all() as $error)
                            <div class="entry input-group{{ $errors->has() ? ' has-error' : '' }}">
                                <input class="form-control" name="leavetype[]" type="text" id="leavetype" />
                                     <span class="input-group-btn">
                                           <button class="btn btn-success btn-add" type="button">
                                               <span class="glyphicon glyphicon-plus"></span>
                                           </button>
                                       </span>

                            </div>

                                <span class="help-block">
                                    <strong>{{ $error }}</strong>
                                </span>

                            @endforeach
                            @else
                            <div class="entry input-group">
                                <input class="form-control" name="leavetype[]" type="text" id="leavetype" />
                                     <span class="input-group-btn">
                                           <button class="btn btn-success btn-add" type="button">
                                               <span class="glyphicon glyphicon-plus"></span>
                                           </button>
                                     </span>
                            </div>
                        @endif



                    </div>

                    </br>
                    <button type="submit" class="btn btn-success rite">Submit</button>

                    {!! Form::close() !!}
                </div>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <script type="text/javascript">
        $(function()
        {
            $(document).on('click', '.btn-add', function(e)
            {
                e.preventDefault();

                var controlForm = $('.controls form:first'),
                        currentEntry = $(this).parents('.entry:first'),
                        newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                        .removeClass('btn-add').addClass('btn-remove')
                        .removeClass('btn-success').addClass('btn-danger')
                        .html('<span class="glyphicon glyphicon-minus"></span>');
            }).on('click', '.btn-remove', function(e)
            {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });
        });
    </script>
@endsection