@extends('layouts.dashboard')


@section('content')
	

<div class="container">
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                    <h3>Add a service</h3>
                    
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
                {{ Form::open(['action' => 'ServicesController@store']) }}

                <input type="text" class="form-control" name="service" placeholder="Service" required>
                <br />
                
            
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Add Service</button>
                

                {{ Form::close() }}
            </div>
           
        </div>
    </div>
</div>
@stop