@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    <h1>Course List</h1>
                    <table class="table table-striped task-table table-bordered table-hover table-condensed">
                        <thead>
                            <th>No.</th>
                            <th>Name</th>
                        </thead>
                        <tbody>
                        @for($i = 0; $i < count($course); $i++)
                            <tr>
                                <td>{{$i + 1}}</td>
                                <td><a href="/User/Show/Course/{{$course[$i]->id}}">{{$course[$i]->course_name}}</a></td>
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
