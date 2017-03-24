@extends('layouts.app')
@section('content')
<div class="container">
    @if(Session::has('flash_message'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    {{Session::get('flash_message')}}</div>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    <h1><strong>Add student Successful</strong></h1><br>
					Name: {{$student->studentname}}<br>
					Student Id: {{$student->id}}<br>
					Course: {{$course->course_name}}<br>
					<br>
					<br>
					<strong>Course List</strong><br>
					@foreach($courseList as $courses)
					<a href="/Show/Course/{{$courses->id}}">{{$courses->course_name}}</a><br>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection