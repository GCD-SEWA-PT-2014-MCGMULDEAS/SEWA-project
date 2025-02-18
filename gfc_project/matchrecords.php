<!DOCTYPE html>
<!--including db connection to take sql queries-->
<?php
include './dbconnection.php';
/*session start for profile details on right columns*/
@session_start();
/*queries for data on the right hand side*/
$positionQuery = "SELECT position FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$positionQueryOutput = mysqli_query($connection, $positionQuery);
$position = mysqli_fetch_row($positionQueryOutput);

$nameQuery = "SELECT name FROM userpass WHERE userpass.username = '" . $_SESSION["username"] . "'";
$nameQueryOutput = mysqli_query($connection, $nameQuery);
$name = mysqli_fetch_row($nameQueryOutput);

$dobQuery = "SELECT date_of_birth FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$dobQueryOutput = mysqli_query($connection, $dobQuery);
$dob = mysqli_fetch_row($dobQueryOutput);

$genderQuery = "SELECT gender FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$genderQueryOutput = mysqli_query($connection, $genderQuery);
$gender = mysqli_fetch_row($genderQueryOutput);

$clubQuery = "SELECT club_name FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$clubQueryOutput = mysqli_query($connection, $clubQuery);
$club = mysqli_fetch_row($clubQueryOutput);

$countyQuery = "SELECT county_name FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$countyQueryOutput = mysqli_query($connection, $countyQuery);
$county = mysqli_fetch_row($countyQueryOutput);

$matchRecords = "SELECT * FROM appearances WHERE player_name = '" . $name[0] . "'";
$outputMatch = mysqli_query($connection, $matchRecords);
$RowMA1 = mysqli_fetch_row($outputMatch);
?>

<html><!--html (public web page) -->
<head>
<title> Match Records page</title>
  <meta charset="UTF-8">
  <!-- link to style sheet-->
  <link rel="stylesheet" type="text/css" href="recordsstyle.css"/>
</head>
<body>

<header><!--header containng logos and page name -->
<img id="LineImage" src="./backendImages/LineImage.png" alt="Line Chart" />
<img id="BarImage" src="./backendImages/BarImage.png" alt="Bar Chart" />
<a id="LogoutButton" href="./logout.php">Logout</a>
<img id="WebImage" src="./backendImages/logo.jpg" alt="GFC Logo" /><br/>
Match Records<br/>
</header>

<div id = "leftcolumn"><!--left column containing links to other pages-->
<br/>
<a href="./profile.php">Profile Analysis</a><br/><br/>
<a href="./trainingrecords.php">Your Training Records</a><br/><br/>
<a href="./updatedetails.php">Update User Details</a>
</div>

<div id = "rightcolumn"><!--right column containig user details as taken using the user's session username and links to the database-->
<br/>

Name: <?php echo $name[0]; ?><br/><br/>

Date of Birth: <?php echo $dob[0]; ?><br/><br/>  

Gender: <?php echo $gender[0]; ?><br/><br/>

Club: <?php echo $club[0]; ?><br/><br/>

County: <?php echo $county[0]; ?><br/><br/>

Position: <?php echo $position[0]; ?> <br/><br/>
</div>

<div id = "mainbody"><!--main body containing the user's match record details (IF ENTERED - if not then a simple sentence informing them of same is put up!) -->
<?php

if($RowMA1[0] == null){
	echo "<h1>You have not entered any Match Records!</h1>";
} else {
echo "<h1> Your Match records are as follows: </h1>";
echo "<table border='1'>";
echo "<tr><th colspan='10'>Match Records Previously Entered</th></tr>";
echo "<tr><td>Date</td><td>Match Type</td><td>Minutes Played</td><td>Distance Covered (mtrs)</td><td>No. of Possesions</td><td>Passes Complete</td><td>Passes Incomplete</td><td>Attempts</td><td>Goals</td><td>Points</td></tr>";
do {
	/*user's saved match data in table rows / columns*/
echo "<tr><td>{$RowMA1[1]}</td>";
echo "<td>{$RowMA1[2]}</td>";
echo "<td>{$RowMA1[3]}</td>";
echo "<td>{$RowMA1[4]}</td>";
echo "<td>{$RowMA1[5]}</td>";
echo "<td>{$RowMA1[9]}</td>";
echo "<td>{$RowMA1[12]}</td>";
echo "<td>{$RowMA1[13]}</td>";
echo "<td>{$RowMA1[17]}</td>";
echo "<td>{$RowMA1[18]}</td></tr>";
$RowMA1 = mysqli_fetch_row($outputMatch);
} while ($RowMA1);  
echo "</table>";
};
?>

</div>

</body>
</html>