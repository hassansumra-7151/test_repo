<h1>User Data</h1>
<table border="1" cellspacing="0">
@foreach($display as $row)
	<tr>
		<td>{{$row->id}}</td>
		<td>{{$row->name}}</td>
		<td>{{$row->email}}</td>
		<td>{{$row->mobile}}</td>
		<td>{{$row->password}}</td>
	</tr>
@endforeach
</table>