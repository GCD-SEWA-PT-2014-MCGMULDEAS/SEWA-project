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

	<link rel="stylesheet" type="text/css" href="register.css" />

</head>

<body>
	
	<div id = "content">
	<form name = "Register" method = "POST" action = "registrationvalidation.php" OnSubmit = "return validateForm();">
			<h1>Registration</h1>
			<label>Enter your username:</label> <input type = "text" name = "username" id = "username" required/><br/>
			<label>Password:</label> <input type= "password" name="password" id = "password" required/><br/>
			<label>Confirm Password:</label> <input type= "password" name="password1" id = "password1" required/><br/>
			<label>Enter your name:</label> <input type = "text" name = "name" id = "name" required/><br/>
			<label>Enter an email address:</label> <input type = "text" name = "email" id = "email" required/><br/>
			<label>Gender:</label> <select id = "gender"  name = "gender" required>
			<option value = "">-</option>
			<option value = "M">Male</option>
			<option value = "F">Female</option></select><br/>
			<label>Date of Birth:</label> <input type="date" name="dob"  required><br/>
			<label>Height(Meters):</label><input type = "text" name = "height" id = "height" required/><br/>
			<label>Club:</label><input type = "text" name = "club" id = "club" required/><br/>
			<label>County:</label><input type = "text" name = "county" id = "county" required/><br/>
			<label>Position:</label><select id = "position" name = "position" required>
			<option value = "">-</option>
			<option value = "Goalkeeper">Goalkeeper</option>
			<option value = "Defender">Defender</option>
			<option value = "Midfielder">Midfielder</option>
			<option value = "Forward">Forward</option></select><br/>
			<input type = "submit" name = "submit" value = "Register"/>

	</form>

</div>

</body>

</html>