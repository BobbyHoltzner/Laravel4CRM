@extends('layouts.dashboard')

@section('content')

	<h1>All Projects</h1>

	

	<table data-toggle="table" data-pagination="true" id="table-pagination" data-search="true">
	    <thead>
	        <tr>
	            <th data-field="id" data-sortable="true">Company</th>
	            <th data-field="service" data-sortable="true">Service</th>
	            <th data-field="details" data-sortable="true">Details</th>
	            <th data-field="date" data-sortable="true">Date</th>
	            <th data-field="amount" data-sortable="true">Amount</th>
	            <th data-field="contact_name" data-sortable="true">Contact Name</th>
	            <th data-field="contact_email" data-sortable="true">Contact Email</th>
	            <th data-field="contact_phone" data-sortable="true">Contact Phone</th>
	            <th data-field="notes" data-sortable="true">Notes</th>
	            <th data-field="edit" data-width="60">Edit</th>
	            
        	</tr>
	    </thead>
	    @foreach ($projects as $project)
	    	<tr>
		    	<td>{{ $project->company }}</td>
		    	<td>{{ $project->service }}</td>
		    	<td>{{ $project->details }}</td>
		    	<td>{{ date("n/j/Y",strtotime ($project->date)) }}</td>
		    	<td>{{ $project->amount }}</td>
		    	<td>{{ $project->contact_name }}</td>
		    	<td>{{ $project->contact_email }}</td>
		    	<td>{{ $project->contact_phone }}</td>
		    	<td>{{ $project->notes}}</td>
		    	<td><a href="/projects/{{$project->id}}/edit"><i class="fa fa-edit"></i></a><a href="/projects/{{$project->id}}/delete"><i class="fa fa-remove delete"></i></a></td>
	    	</tr>
	    @endforeach
	</table>




@stop