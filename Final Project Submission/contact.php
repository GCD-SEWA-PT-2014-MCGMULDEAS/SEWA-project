<!DOCTYPE html>

<?php 
	$key = "AIzaSyDOd7zDjy5MtmLJei0AORAXUGLsuwW6iXk";
	/*For Server = AIzaSyD3H-YxeHsZHOVa2EfiePuJOwjGgrRSpOk*/
	//also set up one final variable where we concatenate these vairables in addition to code for the embedded sateliite view of the google maps API.
	$embeddedCode = "&q=" . "Griffith College Dublin" . "," . "Dublin" . "," . "Ireland" . "&zoom=20&maptype=satellite";
?>

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
  <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="contactus.css"/>

</head>

<body>

<div class = "header">	<?php include ("header.php");?></div>

<div class = "forminline">
<form name = "email" method = "POST" action = "sendmail.php" onSubmit = "return validateForm();">
Name<br \><input type = "textbox" name = "name"><br/>
Email<br \><input type = "textbox" name = "email"><br/>
Subject<br \><input type = "textbox" name = "subject"><br/>
Message<br \><textarea name = "message" rows = "10" cols = "50"></textarea><br/>
<input type = "submit" name = "submit" value = "Submit Form"/><br/><br/>

<iframe frameborder="2" marginheight="2" marginwidth="2"
src= "https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?><?php echo $embeddedCode; ?>"></iframe>

</form>
</div>

</body>


</html>