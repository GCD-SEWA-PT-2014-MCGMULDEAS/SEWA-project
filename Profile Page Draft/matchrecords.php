<?php
include './dbconnection.php';

@session_start();
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

<html>
<head>
<title> Match Records page</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="recordsstyle.css"/>
</head>
<body>

<header>
<img id="LineImage" src="./LineImage.png" alt="Line Chart" />
<img id="BarImage" src="./BarImage.png" alt="Bar Chart" />
<a id="LogoutButton" href="./logout.php">Logout</a>
<img id="WebImage" src="./logo.jpg" alt="GFC Logo" /><br/>
Match Records<br/>
</header>

<div id = "leftcolumn">
<br/>
<a href="./profile.php">Profile</a><br/><br/>
<a href="./trainingrecords.php">Your Training Records</a><br/><br/>
<a href="./updatedetails.php">Update User Details</a>
</div>

<div id = "rightcolumn">
<br/>

Name: <?php echo $name[0]; ?><br/><br/>

Date of Birth: <?php echo $dob[0]; ?><br/><br/>  

Gender: <?php echo $gender[0]; ?><br/><br/>

Club: <?php echo $club[0]; ?><br/><br/>

County: <?php echo $county[0]; ?><br/><br/>

Position: <?php echo $position[0]; ?> <br/><br/>
</div>

<div id = "mainbody">
<?php

if($RowMA1[0] == null){
	echo "<h1>You have not entered any Match Records!</h1>";
} else {
echo "<h1> Your Match records are as follows: </h1>";
echo "<table width='80%' border='1'>";
echo "<tr><th colspan='10' align='center'>Match Records Previously Entered</th></tr>";
echo "<tr><td>Date</td><td>Match Type</td><td>Minutes Played</td><td>Distance Covered (mtrs)</td><td>No. of Possesions</td><td>Passes Complete</td><td>Passes Incomplete</td><td>Attempts</td><td>Goals</td><td>Points</td></tr>";
do {
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

};

?>

</div>


</body>
</html>