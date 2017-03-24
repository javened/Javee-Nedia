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
                    @foreach($course as $courses )
                    <a href="/Show/Course/{{$courses->id}}">{{$courses->course_name}}</a><br>
                    @endforeach
                    <br><br>
                Grades of {{$student->studentname}}<br><br>
                    <table class="table table-striped task-table table-bordered table-hover table-condensed">
                        <thead>
                            <th><strong>Subject</strong></th>
                            <th><strong>Grade</strong></th>
                        </thead>
                        <tbody>
                        @for($i = 0; $i < count($subject); $i++)
                            <tr>
                                <td>{{$subject[$i]->subject_name}} </td>
                                <td>{{$grades[$i]->grade}} </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                    <h3><a href="/Edit/Grade/{{$cid}}/{{$student->id}}" style="color: green; margin-top: 15px;"> Edit Grade </a></h3>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection