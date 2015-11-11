@extends('layouts.dashboard')

@section('content')

	<h1>All Users</h1>

	

	<table data-toggle="table" data-pagination="true" id="table-pagination">
	    <thead>
	        <tr>
	            <th data-field="id" data-sortable="true">ID</th>
	            <th data-field="first_name" data-sortable="true">First Name</th>
	            <th data-field="last_name" data-sortable="true">Last Name</th>
	            <th data-field="email" data-sortable="true">Email</th>
	           	<th data-field="edit">Edit</th>
	            
        	</tr>
	    </thead>
	    @foreach ($users as $user)
	    	<tr>
		    	<td>{{ $user->id }}</td>
		    	<td>{{ $user->first_name }}</td>
		    	<td>{{ $user->last_name }}</td>
		    	<td>{{ $user->email}}</td>
		    	<td><a href="/users/{{$user->id}}/edit"><i class="fa fa-edit"></i></a><a href="/users/{{$user->id}}/delete"><i class="fa fa-remove delete"></i></a></td>
	    	</tr>
	    @endforeach
	</table>




@stop