<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
</head>
<body>
<div class="container">
	<h1>Registration Form</h1>
	<form  action="/myhome" method="post">
		{{csrf_field()}}
		First name: <input type="text" class="form-control" name="first_name" ><br>
		Middle Initial: <input type="text" class="form-control" name="middle_initial" ><br>
		Last name: <input type="text" class="form-control" name="last_name" ><br>
		Course: <input type="text" class="form-control" name="course" ><br>
		Address: <input type="text" class="form-control" name="address" ><br>
		Student number: <input type="number" class="form-control" name="id" ><br>
		Guardian: <input type="text" class="form-control" name="guardian" ><br>
		<input type="submit" class="btn btn-primary btn-block" value="Submit">
	</form>
	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
</div>
</body>
</html>
