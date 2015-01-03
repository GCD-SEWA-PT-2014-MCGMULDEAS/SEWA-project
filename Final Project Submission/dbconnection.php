<?php
$host = "localhost";
$user = "root";//you'll have to enter your own passwords on local PC here.
$pass = ""; //you'll have to enter your own passwords on local PC here.
$database = "gaaplayerdatabase";
$connection = mysqli_connect($host,$user,$pass);
?>

<!--<html>
<head>
<title> Sample of SQL Printing out page</title>
  <meta charset="UTF-8">
  <script type="text/javascript" src="jscharts.js"></script>
</head>
<body>-->

<?php
if (!$connection){
	die("<p>The database server is not available.</p>");
}
	
	$DBSelect = @mysqli_select_db($connection, $database);
	if (!$DBSelect){
	die("<p>The database is not available.</p>");
	}

?>
<!--</body>
</html>-->