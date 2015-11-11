@extends('layouts.master')


@section('content')
	

<div class="container">
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="logo-login" src="images/logo-sm.png"
                    alt="">
                     @if ($errors->any())
                        <div class="alert alert-danger">
                            <h3>Uh Oh!</h3>
                            <ul>
                                @foreach ($errors->all() as $error) 
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                {{ Form::open(['action' => 'SessionsController@store']) }}

                <input type="text" class="form-control" name="email" placeholder="Email" required>
                <br />
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <br />
                
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign In</button>
                

                {{ Form::close() }}
            </div>
           
        </div>
    </div>
</div>
@stop