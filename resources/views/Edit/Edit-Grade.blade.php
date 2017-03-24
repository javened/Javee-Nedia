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
                Grades of {{$student->studentname}}<br><br>
                <form action="/Save/Grade/{{$cid}}/{{$student->id}}" method="POST">
                {{csrf_field()}}
                    <table class="table table-striped task-table table-bordered table-hover table-condensed">
                    <thead>
                        <th>No.</th>
                        <th>Subjects</th>
                        <th>Grades</th>
                        <th>New Grades</th>
                    </thead>
                        <tbody>
                            @for($i = 0;$i < count($subject);$i++)
                                <tr>
                                    <td>{{$i + 1}}</td>
                                    <td>{{$subject[$i]->subject_name}}</td>
                                    <td>{{$grades[$i]->grade}}</td>
                                    <td><input type="number" name="grade[{{$i}}]"></td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                    <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

</div>

@endsection