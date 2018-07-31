@extends('layouts/master')

@section('content')
    <div class="col-sm-8 blog-main">
		<h1>List of Students</h1>
		<a href="students/create" class="btn btn-primary ml-20">Add a Student</a>
		<a href="/" class="btn btn-primary ml-20">Go to Home Page</a>
		<hr/>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Course</th>
				</tr>
			</thead>
			<tbody>
			    @foreach($students as $student)
					<tr>
						<th>{{ $student->name }}</th>
						<th>{{ $student->phone }}</th>
						<th>{{ $student->email }}</th>
						<th>{{ $student->course->name }}</th>
						<th>
							<a href="students/{{$student->id}}/edit"
							  class="btn btn-primary">
							  Edit
							</a>
						</th>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection