<?php

include './dbconnection.php';

session_start();

//$host="localhost"; // Host name 
//$username="root"; // Mysql username 
//$password=""; // Mysql password 
//$db_name="gaaplayerdatabase"; // Database name 
//$tbl_name="logins"; // Table name 

// Connect to server and select databse.
//$con = mysqli_connect($host, $username, $password);

//if(!$con){
//die("cannot connect");
//}
//mysql_select_db("$db_name")or die("cannot select DB");

//$dbSelect = @mysqli_select_db($con, $db_name);

// username and password sent from form 
$myusername=$_POST["username"]; 
$mypassword=sha1($_POST["password"]); 

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$sql="SELECT * FROM userpass WHERE username='" . $myusername . "' AND password='" . $mypassword . "'";

$result=mysqli_query($connection, $sql) or die("Cannot query database");

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if(mysqli_num_rows($result) == 1){

// Register $myusername, $mypassword and redirect to main page
//session_start("username");
//session_start("password"); 

$_SESSION['username'] = $myusername;

//echo session_id();

header("location:profile.php");
}
else {
echo "Wrong Username or Password.";
echo "<br/>";
echo 'Return to <a href = "login.php">Login</a>';
}

mysqli_close($connection);
?>