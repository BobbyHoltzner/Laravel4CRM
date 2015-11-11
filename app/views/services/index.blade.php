@extends('layouts.dashboard')

@section('content')

	<h1>All Services</h1>

	


	<table data-toggle="table"  data-search="true" data-pagination="true" id="table-pagination" data-sortable="true" data-click-to-select="true" data-width="1000" data-show-filter="true" data-toolbar="#filter-bar" >
	    <thead>
	        <tr>
	            <th data-field="id" data-sortable="true">Service ID</th>
	            <th data-field="service" data-sortable="true">Service</th>
	            <th data-field="edit">Edit</th>
        	</tr>
	    </thead>
	    @foreach ($services as $service)
	    	<tr>
		    	<td>{{ $service->id }}</td>
		    	<td>{{ $service->service }}</td>
		    	<td><a href="/services/{{$service->id}}/edit"><i class="fa fa-edit"></i></a><a href="/services/{{$service->id}}/delete"><i class="fa fa-remove delete"></i></a></td>
	    	</tr>
	    @endforeach
	</table>

	





@stop