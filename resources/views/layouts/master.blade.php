<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Custom CSS -->
    {{--<link href="{{ asset('asset/css/employee.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('asset/css/employeeNew.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('asset/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  href="{{ url('/home') }}"><b>&nbsp;&nbsp;&nbsp;HRMS</b></a>
        </div>

        <!-- Top Menu Items -->

        <ul class="nav navbar-right top-nav">
            @if (Auth::guest())
                <li>
                    <a href="{{ url('/job-post') }}"><i class="fa fa-list"></i> New Jobs</a>
                </li>
                <li>
                    <a href="{{ url('/') }}"><i class="glyphicon glyphicon-log-in"></i> Log-In </a>
                </li>

            @else
                @if(Auth::user()->is_a==='admin')
                    <li><a href="{{ url('admin/dashboard') }}">Deshboard</a></li>
                @endif
            <li><a href="{{ url('/home') }}">Home</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plain"></i> Leave <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/applications/create') }}"><i class="fa fa-paper-plane"></i> Apply</a>
                    </li>

                    <li>
                        <a href="{{ url('/applications') }}"><i class="fa fa-bar-chart"></i> Leave Status</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  {{ Auth::user()->name }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/home') }}"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="{{ url('/messages/create') }}"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/settings/user/edit') }}"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ url('/logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
            @endif
        </ul>

    </div>
</nav>



        @yield('content')



<script src="{{asset('asset/js/jquery.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
</body>
</html>