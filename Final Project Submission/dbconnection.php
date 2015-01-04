<?php
$host = "localhost";
$user = "root";//you'll have to enter your own passwords on local PC here.
$pass = ""; //you'll have to enter your own passwords on local PC here.
$database = "gaaplayerdatabase";
$connection = mysqli_connect($host,$user,$pass);

if (!$connection){
	die("<p>The database server is not available.</p>");
}
	
	$DBSelect = @mysqli_select_db($connection, $database);
	if (!$DBSelect){
	die("<p>The database is not available.</p>");
	}

?>
