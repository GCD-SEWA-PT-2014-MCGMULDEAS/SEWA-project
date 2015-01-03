<!DOCTYPE html>
<html>

<head>


	<meta charset = "utf-8">

	<title>Login</title>
		<link rel="stylesheet" type="text/css" href="login.css" />

</head>

<body>


<div id = "content">
	<form name = "Login" method = "POST" action = "validate.php">
		<h1>Welcome. Please Login.</h1>
		<ul>
			<li><label>Username:</label></li><li><input type = "text" name = "username" id = "username"/></li>
			<li><label>Password:</label></li><li><input type= "password" name="password" id = "password"/></li>
			<li><input type = "submit" name = "submit" value = "login"/><input type = "button" name = "Register" value = "Register" onclick = "window.location.href='./register.php'"></li>

		</ul>

	</form>
</div>
</body>

</html>