
<h2>Projects for {{$data->company}}</h2>
<table>
	<tr>
		<th>Service</th>
		<th>Details</th>
		<th>Date</th>
		<th>Amount</th>
		<th>Contact Name</th>
		<th>Contact Email</th>
		<th>Contact Phone</th>
		<th>Notes</th>
	</tr>
	
	@foreach ($data->projects as $project)
		<tr>
			<td>{{$project->service}}</td>
			<td>{{$project->details}}</td>
			<td>{{$project->date}}</td>
			<td>{{$project->amount}}</td>
			<td>{{$project->contact_name}}</td>
			<td>{{$project->contact_email}}</td>
			<td>{{$project->contact_phone}}</td>
			<td>{{$project->notes}}</td>
		</tr>
	@endforeach
	
</table>