<?php 
	$key = "AIzaSyDOd7zDjy5MtmLJei0AORAXUGLsuwW6iXk";
	//also set up one final variable where we concatenate these vairables in addition to code for the embedded sateliite view of the google maps API.
	$embeddedCode = "&q=" . "Griffith College Dublin" . "," . "Dublin" . "," . "Ireland" . "&zoom=20&maptype=satellite";
?>

<html>
<head>
<title> Contacts page - Location</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="mapstyle.css"/>
</head>
<body>

<iframe frameborder="2" marginheight="2" marginwidth="2"
src= "https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?><?php echo $embeddedCode; ?>"></iframe>

</body>
</html>