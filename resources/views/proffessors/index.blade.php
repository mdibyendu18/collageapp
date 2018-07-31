@extends('layouts/master')

@section('content')
    <div class="col-sm-8 blog-main">
		<h1>List of Professor</h1>
		<hr/>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Professor Name</th>
					<th>Student Name</th>
				</tr>
			</thead>
			<tbody>
				   @foreach($proffessors as $proffessor)
						<tr>
							<td>{{ $proffessor->name }}</td>
							<td>
								<ul>
									@foreach($proffessor->students as $student)
										<li>{{ $student->name }}</li>
									@endforeach
								</ul>
							</td>
						</tr>
					@endforeach
			</tbody>
		</table>
	</div>
@endsection