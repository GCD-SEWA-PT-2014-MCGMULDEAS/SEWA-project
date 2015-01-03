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

<header>	<?php include ("header.php");?> </header>

<div id = "mainbody">

<div id = "leftcenter">
<div class = "forminline">
<form name = "email" method = "POST" action = "sendmail.php" onSubmit = "return validateForm();">
Name*<br \><input type = "textbox" name = "name"><br/>
Email*<br \><input type = "textbox" name = "email"><br/>
Subject*<br \><input type = "textbox" name = "subject"><br/>
Message*<br \><textarea name = "message" rows = "10" cols = "50"></textarea><br/>
<input type = "submit" name = "submit" value = "Submit Form"/><br/><br/>
</form>
</div>

Address:<br/>
<span id = "address">GFC SEWA Project<br/>
Griffith College Dublin<br/>
South Circular Road<br/>
Dublin 2</span>

</div>

<div id = "rightcenter">
<iframe frameborder="2" marginheight="2" marginwidth="2"
src= "https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?><?php echo $embeddedCode; ?>"></iframe>


</div>

</body>

<footer>
<div class="col">
  <h2>Sample links</h2>
 <span id = "minorlinks"><a href="#">Terms & Conditions</a><br/></span>
  <span id = "minorlinks"><a href="#">Sitemap</a><br/></span>
  <span id = "minorlinks"><a href="#">Useful links</a><br/></span>
  </div>
<div class="col">
  <h2>GFC-Stats.com</h2>
  <ul>
    <li>All material is copyright of gfc-stats.com</li>
    <li>Some of the material may be fictitious for the project</li>
    <li>All references to any known individuals are for demonstration purposes only</li>
  </ul>
</div>
<div class="col" id = "image">
  <h2>You can find us on:</h2>
  <ul>
    <li><a href="#facebook"><img style="float:left" src="./Images/facebook.png" width="50px" height="50px"></a></li>
    <li><a href="#linkedin"><img style="float:left" src="./Images/linkedin.jpg" width="50px" height= "50px"></a></li>
    <li><a href="#instagram"><img style="float:left" src="./Images/instagram.png" width="50px" height= "50px"></a></li>
    <li><a href="#twitter"><img style="float:left" src="./Images/twitter.png" width="50px" height= "50px"></a></li>
  </ul>
</div>
</footer>


</html>