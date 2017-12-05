	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<style>
	</style>
</head>
<body>
	<form action="/post" method="post">
		{{ csrf_field() }}
		<input type="text" name="fname" placeholder="fname">
		<input type="text" name="lname" placeholder="lname">
		<input type="Submit" value="Register" name="submit" id="register">
	</form>
</body>
</html>