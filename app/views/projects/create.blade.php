@extends('layouts.dashboard')

@section('content')

        

<div class="container">
<div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">

                    <h3>Add a project</h3>
                   
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
                {{ Form::open(['action' => 'ProjectsController@store']) }}

                
                <select class="form-control" name="company"required >
                    @foreach ($clients as $client)
                        <option>{{$client->company}}</option>
                    @endforeach
                </select>
                <br />

                <select class="form-control" name="client_id"required>
                    @foreach ($clients as $client)
                        <option value="{{$client->id}}">{{$client->company}}</option>
                    @endforeach
                </select>
                <br />
                <select class="form-control" name="service" multiple required>
                    @foreach ($services as $service)
                        <option>{{$service->service}}</option>
                    @endforeach
                </select>
                <br />
                <input type="text" class="form-control" name="details" placeholder="Details" required>
                <br />
                <input type="text" class="form-control" name="date" placeholder="Date" required>
                <br />
                <input type="text" class="form-control" name="amount" placeholder="Amount" required>
                <br />
                <input type="text" class="form-control" name="contact_name" placeholder="Contact Name">
                <br />
                <input type="text" class="form-control" name="contact_email" placeholder="Contact Email">
                <br />
                <input type="text" class="form-control" name="contact_phone" placeholder="Contact Phone">
                <br />
                <input type="textarea" class="form-control" name="notes" placeholder="Additional Notes">
                <br />
                
            
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Add Project</button>
                

                {{ Form::close() }}
            </div>
           
        </div>
    </div>
</div>
@stop
