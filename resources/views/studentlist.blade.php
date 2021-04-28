<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student-List</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
		}
		td,th{
			padding: 5px;
			border: 1px solid;
		}

	</style>
</head>
<body>
		@if(Session::has('deleted'))
	  <span>{{Session::get('deleted')}}</span>
	  @endif

	<a style="float:right" href="{{url('/')}}">Add</a>
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Gender</th>
			<th>Course</th>
			<th>Action</th>
		</tr>
		@foreach($list as $student)
			<tr>
				<td>{{ $student->id }}</td>
				<td>{{ $student->name }}</td>
				<td>{{ $student->description }}</td>
				<td>{{ $student->gender }}</td>
				<td>{{ $student->check }}</td>
				<td>
					<a href="/edit-c/{{ $student->id }}">Edit</a>
					<a href="/delete-c/{{ $student->id }}">Delete</a>

				</td>
				

			</tr>

		@endforeach

	</table>
</body>
</html>