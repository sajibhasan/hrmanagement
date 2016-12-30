@extends('layouts.master')
@section('content')





<div id="page-wrapper">

    <div class="container-fluid">

        <div class="row wrapper">
            <p>

            <form  action="{{ url('/login') }}" method="post" name="Login_Form" class="form-signin">
                {{ csrf_field() }}
                <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                <hr class="colorgraph"><br>

                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Username" required="" autofocus="" />
                <input type="password" class="form-control" name="password" placeholder="Password" required=""/>

                <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
            </form>

        </div>

    </div>
    <!-- body container -->


</div>
<!-- /.page wrapper -->
@endsection