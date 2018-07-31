@extends('layouts/master')

@section('content')
    <div class="col-sm-8 blog-main">

		<h1>Add a Course</h1>
		<hr/>
		<form action="/courses" method="POST">
		  {{ csrf_field() }}

			<div class="form-group">
			    <label for="inputAddress">Course Name</label>
			    <input type="text" class="form-control" id="name" placeholder="" name="name">
			</div>

		  <div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
		  </div>

		@include('layouts/errors')
		</form>
	</div>
@endsection
