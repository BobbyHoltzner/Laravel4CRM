@extends('layouts.master')


@section('content')
	

<div class="container">
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="logo-login" src="images/logo-sm.png"
                    alt="">
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" required autofocus>
                <br />
                <input type="password" class="form-control" placeholder="Password" required>
                <br />
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                </form>
            </div>
           
        </div>
    </div>
</div>
@stop