@extends('adminlayouts.master')
@section('content')

<div id="page-wrapper">

    <div id="page-wrapper">

        <div class="container-fluid">
            </br></br>
            <div class="row">
                <div class="panel ">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-list fa-fw"></i> Messages</h3>
                    </div>
                    <div class="panel-body ">
                        @foreach($allMessages as $allMessage)
                            <span class="pull-left">
                                <img class="media-object" height="50 px" src="{{ URL::to('/images/'. $allMessage->user->image) }}" alt=""><br>
                            </span><br><br><br><br>
                            <p>User : {{$allMessage->user->name}} </p><br>
                            <p>{{$allMessage->body}}</p><br>
                            <p class="small text-muted"><i class="fa fa-clock-o"></i> {{$allMessage->created_at->diffForHumans()}}</p>

                            <hr>

                        @endforeach
                    </div>
                </div>

            </div>
            <br/><br/>
        </div>
        <!-- body container -->

    </div>
    <!-- /.page wrapper -->

</div>

@endsection