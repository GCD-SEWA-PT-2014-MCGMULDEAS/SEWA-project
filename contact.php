<!DOCTYPE html>

<html>

<head>

	<script>

	function validateForm(){

		var x = document.forms["Register"]["email"].value;
    	var atpos = x.indexOf("@");
    	var dotpos = x.lastIndexOf(".");
    	if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        	alert("Not a valid e-mail address");
        	return false;

		} 

	}


</script>

<title>Contact Us</title>

</head>

<body>

	<?php include ("header.php");?>

<form name = "email" method = "POST" action = "sendmail.php" onSubmit = "return validateForm();">
Name<br \><input type = "textbox" name = "name" value = "name"><br \>
Email<br \><input type = "textbox" name = "email" value = "email"><br \>
Subject<br \><input type = "textbox" name = "subject" value = "subject"><br \>
Message<br \><textarea name = "message" rows = "4" cols = "50"></textarea><br \>
<input type = "submit" name = "submit" value = "Submit Form"/>

</form>

</body>


</html>