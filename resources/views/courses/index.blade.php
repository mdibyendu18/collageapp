@extends('layouts/master')

@section('content')
    <div class="col-sm-8 blog-main">
		<h1>List of Courses</h1>
		<hr/>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Course id</th>
					<th>Couse Name</th>
				</tr>
			</thead>
			<tbody>
			    @foreach($courses as $course)
					<tr>
						<th>{{ $course->id }}</th>
						<th>{{ $course->name }}</th>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection