@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    <h1>Add Student -  {{$course->course_name}}</h1>
					<form  action="/Add/Student" method="post">
						{{csrf_field()}}
						Name: <input style="margin-top: -5px" type="text" class="form-control" name="studentname" ><br>
						@if ($errors->has('studentname'))
                                    <span style="margin-top: -5px" class="help-block alert alert-danger">
                                        <strong>{{ $errors->first('studentname') }}</strong>
                                    </span>
                                @endif
						<input type="hidden" class="form-control" name="courses_id" value="{{$course->id}}" ><br>
						Student number: <input style="margin-top: -5px" type="number" class="form-control" name="id" ><br>
						@if ($errors->has('id'))
                                    <span style="margin-top: -5px" class="help-block alert alert-danger">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
						<input style="margin-top: -5px" type="submit" class="btn btn-primary btn-block" value="Submit">
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection