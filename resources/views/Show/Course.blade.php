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
                    <h1>{{$course->course_name}}</h1>
                        @foreach($courses as $cours )
                        <a href="/Show/Course/{{$cours->id}}">{{$cours->course_name}}</a><br>
                        @endforeach
                        <br><br>
                        <a href="/Show/Add-Student/{{$course->id}}"><h3>Add Student</h3></a>
                        <br>
                        <table class="table table-striped task-table table-bordered table-hover table-condensed">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                            </thead>
                            <tbody>
                                @foreach($unique as $uniques)
                                <tr>
                                    <td>{{$uniques->id}}</td>
                                    <td>{{$uniques->studentname}}</td>
                                    <td><a href="/Show/Grades/{{$uniques->courses_id}}/{{$uniques->id}}"> Grades</a></td>
                                    <td><a href="/Edit/Student/{{$uniques->id}}"> Edit</a></td>
                                    <td><form method="Post" action="/Delete/Student/{{$uniques->id}}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit">Delete</button>
                                    </form></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h3><a href="/Show/Add-Subject/{{$course->id}}">Add Subject</a></h3>
                        <table class="table table-striped task-table table-bordered table-hover table-condensed">
                            <thead>
                                <th>No.</th>
                                <th>Subject List</th>
                            </thead>
                            <tbody>
                                @for($i = 0; $i < count($subject); $i++)
                                <tr>
                                    <td>{{$i + 1}}</td>
                                    <td>{{$subject[$i]->subject_name}}</td>
                                    <td><form method="Post" action="/Delete/Course-Subject/{{$cs[$i]->id}}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit">Delete</button>
                                    </form></td>
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