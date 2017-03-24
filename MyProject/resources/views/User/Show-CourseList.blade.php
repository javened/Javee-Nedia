@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>
                <div class="panel-body">
                <h3>Course List</h3>
                @foreach($courses as $course)
	                	<a style="margin-top: -20px;" href="/User/Show/Course/{{$course->id}}">{{$course->course_name}}</a><br>
	            @endforeach
	            <br>
	            <h2>Students List</h2>
                	<table class="table table-striped task-table table-bordered table-hover table-condensed">
                		<thead>
                			<th>No.</th>
                			<th>Students Name</th>
                		</thead>
                		<tbody>
                		@for($i = 0; $i < count($students); $i++)
                			<tr>
                				<td>{{$i + 1}}</td>
                				<td>{{$students[$i]->studentname}}</td>
                				<td><a href="/User/Show/Grade/{{$students[$i]->id}}"> Grades</a></td>
                			</tr>
                		@endfor
                		</tbody>
                	</table>
                	<h2>Subjects List</h2>
                	<table class="table table-striped task-table table-bordered table-hover table-condensed">
                		<thead>
                			<th>No.</th>
                			<th>Subjects Name</th>
                		</thead>
                		<tbody>
                		@for($i = 0; $i < count($subjects); $i++)
                			<tr>
                				<td>{{$i + 1}}</td>
                				<td>{{$subjects[$i]->subject_name}}</td>
                			</tr>
                		@endfor
                		</tbody>
                	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection