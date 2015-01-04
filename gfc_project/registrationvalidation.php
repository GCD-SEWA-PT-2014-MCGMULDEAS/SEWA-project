<?php

include './dbconnection.php';

$name = $_POST["name"];
$newusername = $_POST["username"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$height = $_POST["height"];
$club = $_POST["club"];
$county = $_POST["county"];
$position = $_POST["position"];
$pass = sha1($_POST["password"]);
$confirmpass = sha1($_POST["password1"]);

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

//$dbSelect = @mysqli_select_db($con, $db_name);

//$sql="INSERT INTO userpass VALUES ('" . $newusername . "', '" . $name . "', '" . $pass . "', '" . $email . "');";
$sql="INSERT INTO userpass VALUES ('$name','$newusername', '$pass', '$email');";
$sql1="INSERT INTO players VALUES ('$name', '$dob', '$gender', '$height', '$club', '$county', '$position');";
//$sql1="INSERT INTO players (name, dob, gender, height, club, county, position) VALUES ('" . $name . "', '" . $dob . "', '" . $gender . "', '" . $height . "', '" . $club . "', '" . $county . "', '" . $position . "');";

//echo $sql;
//echo $sql1;

//die();

mysqli_query($connection, $sql) or die("Username already in use.") ;
mysqli_query($connection, $sql1) or die("Query Failed") ;


header("location:login.php");

mysqli_close($connection);
?>