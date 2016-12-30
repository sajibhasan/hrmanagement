@extends('layouts.master')
@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">
            </br></br>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Notice Board</h3>
                </div>
                <div class="panel-body notice">
                    @foreach ($notices as $notice)
                    <h3>{{date('d-M-Y',strtotime($notice->created_at))}}</h3>
                    <h4>{{$notice->notice_title}}</h4>
                    <p>{{$notice->description}}</p>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



@endsection