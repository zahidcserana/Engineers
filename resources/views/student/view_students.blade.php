@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Students</div>

				<div class="panel-body">
					@if(count($students)>0)
						@foreach($students as $student)
							<table class="table">
								<thead>
									<th>Batch</th>
									<th>Name</th>
									<th>Department</th>
									<th>Hall</th>
								</thead>
								<tbody>
									<tr>
										<td>{$student->batch}</td>
										<td>{$student->name}</td>
										<td>{$student->department}</td>
										<td>{$student->hall}</td>
									</tr>
								</tbody>
							</table>
						@endforeach
					@else
					 No Entry
					@endIf
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
