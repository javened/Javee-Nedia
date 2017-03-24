<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form action="{{route('login')}}" method="POST">
{{csrf_field()}}
<input type="text" name="username" autofocus>
<input type="password" name="password" autofocus>
<input type="checkbox" name="checkbox" value="remember-me" autofocus>
<button type="submit">Login</button>
<button type="submit">Signup</button>
</form>
</body>
</html>