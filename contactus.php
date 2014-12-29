<?php 
	$key = "AIzaSyDOd7zDjy5MtmLJei0AORAXUGLsuwW6iXk";
	//also set up one final variable where we concatenate these vairables in addition to code for the embedded sateliite view of the google maps API.
	$embeddedCode = "&q=" . "Griffith College Dublin" . "," . "Dublin" . "," . "Ireland" . "&zoom=20&maptype=satellite";
?>

<html>
<head>
<title> Profile page</title>
  <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="contactus.css"/>
</head>
<body>
</body>
<form method="POST" action = '#'>
<h1>Contact Us:</h1><br/>
First Name *: <input type="text" class = "textboxes" name="first-name" required>   Second Name *: <input type="text" class = "textboxes" name="second-name" required><br/><br/>
Email Address *: <input type="text" class = "textboxes" name="email" required><br/><br/>
Subject:* <input type="text" class = "textboxes" name="email-subject" required><br/><br/>
Comment:* <TEXTAREA name="email-comment" ROWS=10 COLS=40 required></TEXTAREA><br/><br/>
<!--Submit Query Button -->
<input type="submit" name="Submit" value="Submit"><br/><br/>

<iframe frameborder="2" marginheight="2" marginwidth="2"
src= "https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?><?php echo $embeddedCode; ?>"></iframe>

</form>
</head>