<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
</head>
<body>

<table class="table table-striped task-table table-bordered table-hover table-condensed" border="black" cellpadding="15" cellspacing="5">
	        
    <thead>
        <th>NO.</th>
        <th>First Name</th>
        <th>M.I</th>
        <th>Last Name</th>
        <th>Student Number</th>
        <th>Course</th>
        <th>Address</th>
        <th>Guardian</th>
    </thead>
    <tbody>
	    @foreach ($unique as $uniques)
			<form action="/myhome/{{$uniques->id}}" method="POST" >
			{{csrf_field()}}
			{{method_field('PUT')}}
				<tr>
					<td >{{ $uniques->id }}</td>
			    	<td ><input type="text" class="form-control" name="first_name" value="{{ $uniques->first_name }}"></td>
			    	<td ><input type="text" class="form-control" name="middle_initial" value="{{ $uniques->middle_initial }}"></td>
			    	<td ><input type="text" class="form-control" name="last_name" value="{{ $uniques->last_name }}"></td>
			    	<td ><input type="text" class="form-control" name="student_number" value="{{ $uniques->student_number }}"></td>
			    	<td ><input type="text" class="form-control" name="course" value="{{ $uniques->course }}"></td>
			    	<td ><input type="text" class="form-control" name="address" value="{{ $uniques->address }}"></td>
			    	<td ><input type="text" class="form-control" name="guardian" value="{{ $uniques->guardian }}"></td>
					<td ><input type="submit" class="btn btn-primary btn-block" value="Done"></td>
				</tr>
			</form
		@endforeach
	</tbody> 
</table>
</body>
</html>

