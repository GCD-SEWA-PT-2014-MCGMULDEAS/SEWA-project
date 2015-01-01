<?php
include './dbconnection.php';
?>

<html>
<head>
<title> Match Records page</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="recordsstyle.css"/>
</head>
<body>

<header>Match Records<br/>

<a href="draftprofileupdated.php">Profile</a>
<a href="./trainingrecords.php">Your Training Records</a>
<a href="./updatedetails.php">Update User Details</a>
</header>

<div id = "leftcolumn">
<br/>
<a href="draftprofileupdated.php">Profile</a><br/><br/>
<a href="./trainingrecords.php">Your Training Records</a><br/><br/>
<a href="./updatedetails.php">Update User Details</a>
</div>

<div id = "rightcolumn">
<br/>

Name: <br/><br/>

Date of Birth: <br/><br/>  

Gender: <br/><br/>

Club: <br/><br/>

County: <br/><br/>

Position: <br/><br/>
</div>

<div id = "mainbody">
<h1> Your Match records are as follows: </h1>
<?php
$usersName = "Michael Darragh McAuley";
$matchRecords = "SELECT * FROM appearances WHERE player_name = '" . $usersName . "'";
$outputMatch = mysqli_query($connection, $matchRecords);
$RowMA1 = mysqli_fetch_row($outputMatch);

echo "<table width='80%' border='1'>";
echo "<tr><th colspan='10' align='center'>Match Records Previously Entered</th></tr>";
echo "<tr><td>Date</td><td>Match Type</td><td>Minutes Played</td><td>Distance Covered (mtrs)</td><td>No. of Possesions</td><td>Passes Complete</td><td>Passes Incomplete</td><td>Attempts</td><td>Goals</td><td>Points</td></tr>";
do {
echo "<tr><td>{$RowMA1[1]}</td>";
echo "<td>{$RowMA1[2]}</td>"; //need to add in Match Type to database or derive same
echo "<td>{$RowMA1[3]}</td>";
echo "<td>{$RowMA1[4]}</td>";
echo "<td>{$RowMA1[5]}</td>";
echo "<td>{$RowMA1[9]}</td>";
echo "<td>{$RowMA1[12]}</td>";
echo "<td>{$RowMA1[13]}</td>";//need to add in Attempts to database or derive same
echo "<td>{$RowMA1[16]}</td>";
echo "<td>{$RowMA1[17]}</td></tr>";
$RowMA1 = mysqli_fetch_row($outputMatch);
} while ($RowMA1); 

?></div>


</body>
</html>