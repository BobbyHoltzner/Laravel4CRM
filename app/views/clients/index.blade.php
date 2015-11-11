@extends('layouts.dashboard')

@section('content')

	<h1>All Clients</h1>

	
	<table data-toggle="table"  data-search="true" data-pagination="true" id="table-pagination" data-sortable="true">
	    <thead>
	        <tr>
	        	<th data-valign="middle" data-align="center" data-field="view" data-sortable="true">View</th>
	            <th data-valign="middle" data-align="center" data-field="company" data-sortable="true">Company</th>
	            <th data-valign="middle" data-align="center" data-field="address" data-sortable="true">Street Address</th>
	            <th data-valign="middle" data-align="center" data-field="city" data-sortable="true">City</th>
	            <th data-valign="middle" data-align="center" data-field="state" data-sortable="true">State</th>
	            <th data-valign="middle" data-align="center" data-field="zip" data-sortable="true">Zip Code</th>
	            <th data-valign="middle" data-align="center" data-field="website" data-sortable="true">Website</th>
	            <th data-valign="middle" data-align="center" data-field="edit" data-width="60" data-sortable="true">Edit</th>
	            
        	</tr>
	    </thead>
	    @foreach ($clients as $client)
	    	
		    	<tr>
					<td><a href="clients/<?php echo $client->id ?>"><button class="btn btn-primary">VIEW</button></a></td>
			    	<td>{{ $client->company }}</td>
			    	<td>{{ $client->street_address }}</td>
			    	<td>{{ $client->city}}</td>
			    	<td>{{ $client->state }}</td>
			    	<td>{{ $client->zip }}</td>
			    	<td>{{ $client->website }}</td>
			    	<td><a href="/clients/{{$client->id}}/edit"><i class="fa fa-edit"></i></a><a href="/clients/{{$client->id}}/delete"><i class="fa fa-remove delete"></i></a></td>
		    	</tr>

	    @endforeach
	</table>




@stop