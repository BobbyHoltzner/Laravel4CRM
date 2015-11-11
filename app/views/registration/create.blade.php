@extends('layouts.dashboard')


@section('content')
	

<div class="container">
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">

                   
                    

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
                    
                {{Form::open(['route'=>'register'])}}
                    <h3>Register a new user</h3>
                    <br />
                <input type="text" class="form-control" name="first_name" placeholder="First Name" required autofocus>
                <br />
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                <br />
                <input type="text" class="form-control" name="email" placeholder="Email" required>
                <br />
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <br />
                
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Register</button>
               {{Form::close()}}
                
            </div>
           
        </div>
    </div>
</div>
@stop