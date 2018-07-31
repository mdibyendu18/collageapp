@extends('layouts/master')

@section('content')
    <div class="col-sm-8 blog-main">

		<h1>Edit a student</h1>
		<hr/>
		<form action="/students/{{ $student->id }}" method="POST">
		  {{ method_field('PUT') }}
		  {{ csrf_field() }}

			<div class="form-group">
			    <label for="inputAddress">Student Name</label>
			    <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{ $student->name}}">
			</div>

			<div class="form-group">
			    <label for="inputAddress">Email</label>
			    <input type="text" class="form-control" id="email" placeholder="" name="email" value="{{ $student->email}}">
			</div>

			<div class="form-group">
			    <label for="inputAddress">Phone</label>
			    <input type="text" class="form-control" id="phone" placeholder="" name="phone"
			    value="{{ $student->phone}}">
			</div>

			@if(count($courses))
				<div class="form-group">
				    <label for="inputAddress">Course</label>
				     <select class="form-control" id="course_id" name="course_id">
					    @foreach($courses as $course)
							<option value="{{ $course->id}}" @if ($course->id === $student->course->id) {{ 'selected' }} @endif>{{ $course->name}}</option>
					    @endforeach
					  </select>
				</div>
			@endif

		  <div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		  </div>

		@include('layouts/errors')
		</form>
	</div>
@endsection
