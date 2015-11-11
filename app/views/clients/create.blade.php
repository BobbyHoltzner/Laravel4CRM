@extends('layouts.dashboard')


@section('content')
	

<div class="container">
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                    <h3>Add a client</h3>
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
                {{ Form::open(['action' => 'ClientsController@store']) }}

                <input type="text" class="form-control" name="company" placeholder="Company Name" required>
                <br />
                <input type="text" class="form-control" name="street_address" placeholder="Street Address">
                <br />
                <input type="text" class="form-control" name="city" placeholder="City">
                <br />
                <input type="text" class="form-control" name="state" placeholder="State">
                <br />
                <input type="text" class="form-control" name="zip" placeholder="Zip Code">
                <br />
                <input type="text" class="form-control" name="website" placeholder="Website">
                <br />
                <input type="textarea" class="form-control" name="notes" placeholder="Additional Notes">
                <br />
                
            
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Add Client</button>
                

                {{ Form::close() }}
            </div>
           
        </div>
    </div>
</div>
@stop