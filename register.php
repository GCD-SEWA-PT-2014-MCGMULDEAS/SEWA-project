<!DOCTYPE html>
<html>

<head>

<script>

	function validateForm(){

		if(document.Register.password.value != document.Register.password1.value){
			alert('Passwords do not match!');
			document.Register.password1.focus();     
			return false;
		}

		var x = document.forms["Register"]["email"].value;
    	var atpos = x.indexOf("@");
    	var dotpos = x.lastIndexOf(".");
    	if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        	alert("Not a valid e-mail address");
        	return false;

		} 

	}


</script>
	<meta charset = "utf-8">

	<title>Register</title>

</head>

<body>

	<form name = "Register" method = "POST" action = "registrationvalidation.php" OnSubmit = "return validateForm();">

			Enter your username: <input type = "text" name = "username" id = "username" required/><br \>
			Password: <input type= "password" name="password" id = "password" required/><br \>
			Confirm Password: <input type= "password" name="password1" id = "password1" required/><br \>
			Enter your name: <input type = "text" name = "name" id = "name" required/><br \>
			Enter an email address: <input type = "text" name = "email" id = "email" required/><br \>
			Gender: <select id = "gender"  name = "gender" required>
			<option value = "M">Male</option>
			<option value = "F">Female</option></select><br \>
			Date of Birth: <input type="date" name="dob" value = "dob" required><br \>
			Height(Meters):<input type = "text" name = "height" id = "height" required/><br \>
			Club:<input type = "text" name = "club" id = "club" required/><br \>
			County:<input type = "text" name = "county" id = "county" required/><br \>
			Position:<select id = "position" name = "position" required>
			<option value = "GOALKEEPER">Goalkeeper</option>
			<option value = "DEFENDER">Defender</option>
			<option value = "MIDFIELDER">Midfielder</option>
			<option value = "FORWARD">Forward</option></select><br \>
			<input type = "submit" name = "submit" value = "Register"/>

	</form>

</body>

</html>