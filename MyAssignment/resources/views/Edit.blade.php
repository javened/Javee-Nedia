@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>


	    	<form action="/myhome/{{$unique[0]->id}}" method="POST" >
			{{csrf_field()}}
			{{method_field('PUT')}}
	<table class="table table-striped task-table table-bordered table-hover table-condensed"> 
	    <tbody>
	    	@for($i = 0;$i < count($unique);$i++)
	    		<tr>
	    			<td>No.</td>
	    			<td>{{$unique[$i]->id}}</td>
	    			<td><input type="number" class="form-control" name="id" placeholder="ID Number"></td>
	    		</tr>
	    		<tr>
	    			<td>First Name</td>
	    			<td>{{$unique[$i]->first_name}}</td>
	    			<td><input type="text" class="form-control" name="first_name" placeholder="First Name"></td>
	    		</tr>
	    		<tr>
		    		<td>M.I</td>
	    			<td>{{$unique[$i]->middle_initial}}</td>
	    			<td><input type="text" class="form-control" name="middle_initial" placeholder="Middle Initial"></td>
	    		</tr>
	    		<tr>
	    			<td>Last Name</td>
	    			<td>{{$unique[$i]->last_name}}</td>
	    			<td><input type="text" class="form-control" name="last_name" placeholder="Last Name"></td>
	    		</tr>
	    		<tr>
	    			<td>Course</td>
	    			<td>{{$unique[$i]->course}}</td>
	    			<td><input type="text" class="form-control" name="course" placeholder="Course"></td>
	    		</tr>
	    		<tr>
	    			<td>Address</td>
	    			<td>{{$unique[$i]->address}}</td>
	    			<td><input type="text" class="form-control" name="address" placeholder="Adddress"></td>
	    		</tr>
	    		<tr>
	    			<td>Guardian</td>
	    			<td>{{$unique[$i]->guardian}}</td>
	    			<td><input type="text" class="form-control" name="guardian" placeholder="Guardian"></td>
	    		</tr>
	    	@endfor
	    </tbody>
	</table>
	    		<input type="submit" class="form-control btn btn-primary btn-block">
	    	</form>
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

