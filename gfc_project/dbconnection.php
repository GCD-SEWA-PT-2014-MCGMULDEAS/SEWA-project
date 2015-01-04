<?php
$host = "localhost";
$user = "gfc";//you'll have to enter your own passwords on local PC here.
$pass = "o7akndo2iqpz"; //you'll have to enter your own passwords on local PC here.
$database = "gfc_gaaplayerdatabase";
$connection = mysqli_connect($host,$user,$pass);

if (!$connection){
	die("<p>The database server is not available.</p>");
}
	
	$DBSelect = @mysqli_select_db($connection, $database);
	if (!$DBSelect){
	die("<p>The database is not available.</p>");
	}

?>
