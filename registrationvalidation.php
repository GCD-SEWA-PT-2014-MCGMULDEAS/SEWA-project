<?php

$newuser = $_POST["username"];
$newpass = sha1($_POST["password"]);
$confirmpass = sha1($_POST["password1"]);

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="users"; // Database name 
//$tbl_name="logins"; // Table name 

// Connect to server and select databse.
$con = mysqli_connect($host, $username, $password);

if(!$con){
die("cannot connect");
}

$dbSelect = @mysqli_select_db($con, $db_name);

$sql="INSERT INTO logins (username, password) VALUES ('" . $newuser . "', '" . $newpass . "');";

echo $sql;

//die();

mysqli_query($con, $sql) or die("Query failed");

header("login.php");

mysqli_close($con);
?>