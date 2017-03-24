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
                <h1>Course List</h1><h3 style="text-align: right; margin-top: -40px;"><a href="Show/Add-Course" style="text-decoration: none; color: green;">Add Course</a></h3>
                    <table class="table table-striped task-table table-bordered table-hover table-condensed">
                        <thead>
                            <th>No.</th>
                            <th>Name</th>
                        </thead>
                        <tbody>
                        @for($i = 0; $i < count($course); $i++)
                            <tr>
                                <td>{{$i + 1}}</td>
                                <td><a href="/Show/Course/{{$course[$i]->id}}">{{$course[$i]->course_name}}</a></td>
                                <td><a href="/Edit/Course/{{$course[$i]->id}}"> Edit</a></td>
                                <td><form method="Post" action="/Delete/Course/{{$course[$i]->id}}">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit">Delete</button>
                                    </form></td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                    
                    <h1>Subject List</h1><h3 style="text-align: right; margin-top: -40px;"><a href="Show/Add-Subject" style="text-decoration: none; color: green;">Add Subject</a></h3>
                    <table class="table table-striped task-table table-bordered table-hover table-condensed">
                        <thead>
                            <th>No.</th>
                            <th>Name</th>
                        </thead>
                        <tbody>
                        @for($i = 0; $i < count($subject); $i++)
                            <tr>
                                <td>{{$i + 1}}</td>
                                <td>{{$subject[$i]->subject_name}}</td>
                                <td><a href="/Edit/Subject/{{$subject[$i]->id}}"> Edit</a></td>
                                <td><form method="Post" action="/Delete/Subject/{{$subject[$i]->id}}">
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
<script src="bootstrap-3.3.7-dist/js/jquery-3.1.1.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
@endsection