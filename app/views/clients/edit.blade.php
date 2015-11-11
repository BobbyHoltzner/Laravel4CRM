@extends('layouts.dashboard')


@section('content')
	

<div class="container">
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                    <h3>Edit Client</h3>
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

                    
                {{ Form::model($client,(['method' => 'PATCH', 'route' => ['clients.update', $client->id]])) }}

                <input type="text" class="form-control" name="company" placeholder="Company Name" value="{{$client->company}}" required>
                <br />
                <input type="text" class="form-control" name="street_address" placeholder="Street Address" value="{{$client->street_address}}">
                <br />
                <input type="text" class="form-control" name="city" placeholder="City" value="{{$client->city}}">
                <br />
                <input type="text" class="form-control" name="state" placeholder="State" value="{{$client->state}}">
                <br />
                <input type="text" class="form-control" name="zip" placeholder="Zip Code" value="{{$client->zip}}">
                <br />
                <input type="text" class="form-control" name="website" placeholder="Website" value="{{$client->website}}">
                <br />
                <input type="textarea" class="form-control" name="notes" placeholder="Additional Notes" value="{{$client->notes}}">
                <br />
                
            
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Update Client</button>
                

                {{ Form::close() }}
            </div>
           
        </div>
    </div>
</div>
@stop