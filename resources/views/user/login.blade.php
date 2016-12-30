@extends('layouts.master')
@section('content')
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
            <a class="navbar-brand" href="login.html"><b>&nbsp;&nbsp;&nbsp;HRMS</b></a>
        </div>

        <!-- Top Menu Items -->

        <ul class="nav navbar-right top-nav">

            <li>
                <a href="newjobs.html"><i class="fa fa-list"></i> New Jobs</a>
            </li>
        </ul>
    </div>
</nav>



<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row wrapper">

            <form action="" method="post" name="Login_Form" class="form-signin">
                <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                <hr class="colorgraph"><br>

                <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
                <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>

                <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
            </form>
            <p>



        </div>

    </div>
    <!-- body container -->

</div>
<!-- /.page wrapper -->
@endsection