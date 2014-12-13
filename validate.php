<?php

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="users"; // Database name 
$tbl_name="logins"; // Table name 

// Connect to server and select databse.
$con = mysqli_connect($host, $username, $password);

if(!$con){
die("cannot connect");
}
//mysql_select_db("$db_name")or die("cannot select DB");

$dbSelect = @mysqli_select_db($con, $db_name);

// username and password sent from form 
$myusername=$_POST["username"]; 
$mypassword=sha1($_POST["password"]); 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' AND password='$mypassword';";
$result=mysqli_query($con, $sql) or die();

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if(mysqli_num_rows($result) == 1){

// Register $myusername, $mypassword and redirect to main page
session_register("username");
session_register("password"); 
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}

mysql_close($con);
?>