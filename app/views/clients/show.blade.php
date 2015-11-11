@extends('layouts.dashboard')

@section('content')

	<h1>Projects for {{$client->company}}</h1>

	<a href="/clients/{{$client->id}}/print"><button class="btn btn-primary">Print</button></a>
	<a href="/clients/{{$client->id}}/csv"><button class="btn btn-primary">Excel</button></a>

	
	<table data-toggle="table"  data-search="true" data-pagination="true" id="table-pagination" data-sortable="true">
	    <thead>
	        <tr>
	            <th data-valign="middle" data-align="center" data-field="service" data-sortable="true">Service</th>
	            <th data-valign="middle" data-align="center" data-field="details" data-sortable="true">Details</th>
	            <th data-valign="middle" data-align="center" data-field="date" data-sortable="true">Date</th>
	            <th data-valign="middle" data-align="center" data-field="amount" data-sortable="true">Amount</th>
	            <th data-valign="middle" data-align="center" data-field="contact_name" data-sortable="true">Contact Name</th>
	            <th data-valign="middle" data-align="center" data-field="contact_email" data-sortable="true">Contact Email</th>
	            <th data-valign="middle" data-align="center" data-field="contact_phone" data-sortable="true">Contact Phone</th>
	            <th data-valign="middle" data-align="center" data-field="notes" data-sortable="true">Notes</th>
	            <th data-valign="middle" data-align="center" data-field="edit" data-width="60" data-sortable="true">Edit</th>
	            
        	</tr>
	    </thead>
	    
	    
	   
	   @foreach ($client->projects as $project)
	    	
		    	<tr>
			    	<td>{{$project->service}}</td>
			    	<td>{{$project->details}}</td>
			    	<td>{{$project->date}}</td>
			    	<td>{{$project->amount}}</td>
			    	<td>{{$project->contact_name}}</td>
			    	<td>{{$project->contact_email}}</td>
			    	<td>{{$project->contact_phone}}</td>
			    	<td>{{$project->notes}}</td>
			    	<td><a href="/projects/{{$project->id}}/edit"><i class="fa fa-edit"></i></a><a href="/projects/{{$project->id}}/delete"><i class="fa fa-remove delete"></i></a></td>
		    	</tr>
		   	@endforeach

	</table>




@stop