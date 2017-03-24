@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    @foreach($course as $courses )
                        <a href="/Show/Course/{{$courses->id}}">{{$courses->course_name}}</a><br>
                    @endforeach
                    <br><br>
                    <form action="/Save/Student/{{$student->id}}" method="POST">
                    {{csrf_field()}}
                    <table class="table table-striped task-table table-bordered table-hover table-condensed">
                        <tbody>
                            <tr>
                                <td><strong>Student Name</strong></td>
                                <td>{{$student->studentname}}</td>
                            </tr>
                            <tr>
                                <td><strong>New Name</strong></td>
                                <td><input class="form-control" type="text" name="studentname">
                                @if ($errors->has('studentname'))
                                    <span class="help-block alert alert-danger">
                                        <strong>{{ $errors->first('studentname') }}</strong>
                                    </span>
                                @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
	

@endsection