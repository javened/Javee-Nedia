@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">USER Dashboard</div>

                <div class="panel-body">
                    <h4><strong>Course List</strong></h4>
                    @foreach($courses as $course )
                    <a href="/User/Show/Course/{{$course->id}}">{{$course->course_name}}</a><br>
                    @endforeach
                    <br><br>
                <h3><strong>Grades of {{$student->studentname}}</strong></h3><br><br>
                    <table style="margin-top: -20px;" class="table table-striped task-table table-bordered table-hover table-condensed">
                        <thead>
                            <th><strong>Subject</strong></th>
                            <th><strong>Grade</strong></th>
                        </thead>
                        <tbody>
                        @for($i = 0; $i < count($subjects); $i++)
                            <tr>
                                <td>{{$subjects[$i]->subject_name}} </td>
                                <td>{{$grades[$i]->grade}} </td>
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