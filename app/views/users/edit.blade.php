@extends('layouts.dashboard')

@section('content')

        

<div class="container">
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">

                    <h3>Edit User</h3>
                   
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
                {{ Form::model($user,(['method' => 'PATCH', 'route' => ['users.update', $user->id]])) }}

                 <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{$user->first_name}}" required>
                <br />
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{$user->last_name}}" required>
               
                <br />
                <input type="text" class="form-control" name="email" placeholder="Email" value="{{$user->email}}" required>
                <br />
                <input type="password" class="form-control" name="password" placeholder="Password" value="{{$user->password}}" required>
                <br/>
                
               
                
            
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Update User</button>
                

                {{ Form::close() }}
            </div>
           
        </div>
    </div>
</div>
@stop