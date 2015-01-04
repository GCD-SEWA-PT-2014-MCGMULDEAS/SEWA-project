<?php
@session_start();
include './dbconnection.php';

$nameQuery = "SELECT name FROM userpass WHERE userpass.username = '" . $_SESSION["username"] . "'";
$nameQueryOutput = mysqli_query($connection, $nameQuery);
$name = mysqli_fetch_row($nameQueryOutput);

//$name = $_POST["name"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$height = $_POST["height"];
$club = $_POST["club"];
$county = $_POST["county"];
$position = $_POST["position"];

	$sql = "UPDATE players INNER JOIN userpass ON players.name = userpass.name SET date_of_birth = '" . $dob . "', gender = '" . $gender . "', height_in_meters = '" . $height . "', club_name = '" . $club . "', county_name = '" . $county . "', position = '" . $position . "' WHERE players.name = '" . $name[0] . "';";

mysqli_query($connection, $sql);

//echo $sql;

header("location:updatedetails.php");

	?>