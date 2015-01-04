<!DOCTYPE html>
<?php
include './dbconnection.php';
?>

<?php 

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

$trainingRecords = "SELECT * FROM training WHERE player_name = '" . $name[0] . "'";
$outputTraining = mysqli_query($connection, $trainingRecords);
$RowTR1 = mysqli_fetch_row($outputTraining); 

//Training Averages for Chart and table
$avgSkillsQuery = "SELECT ROUND(AVG(skills_time_minutes),2) FROM training WHERE player_name = '" . $name[0] . "'";
$avgSkillsOutput = mysqli_query($connection, $avgSkillsQuery);
$avgSkills = mysqli_fetch_row($avgSkillsOutput);
$avgFitnessQuery = "SELECT ROUND(AVG(fitness_time_minutes),2) FROM training WHERE player_name = '" . $name[0] . "'";
$avgFitnessOutput = mysqli_query($connection, $avgFitnessQuery);
$avgFitness = mysqli_fetch_row($avgFitnessOutput);
$avgGymQuery = "SELECT ROUND(AVG(gym_time_minutes),2) FROM training WHERE player_name = '" . $name[0] . "'";
$avgGymOutput = mysqli_query($connection, $avgGymQuery);
$avgGym = mysqli_fetch_row($avgGymOutput);
$avgRecoveryQuery = "SELECT ROUND(AVG(recovery_minutes),2) FROM training WHERE player_name = '" . $name[0] . "'";
$avgRecoveryOutput = mysqli_query($connection, $avgRecoveryQuery);
$avgRecovery = mysqli_fetch_row($avgRecoveryOutput);
?>

<html>
<head>
<title> Training Records page</title>
  <meta charset="UTF-8">
  <script type="text/javascript" src="jscharts.js"></script>
  <link rel="stylesheet" type="text/css" href="recordsstyle.css"/>
</head>
<body>
<header>
<img id="LineImage" src="./backendImages/LineImage.png" alt="Line Chart" />
<img id="BarImage" src="./backendImages/BarImage.png" alt="Bar Chart" />
<a id="LogoutButton" href="./logout.php">Logout</a>
<img id="WebImage" src="./backendImages/logo.jpg" alt="GFC Logo" /><br/>
Training Records<br/>
</header>

<div id = "leftcolumn">
<br/>
<a href="./profile.php">Profile Analysis</a><br/><br/>
<a href="./matchrecords.php">Your Match Records</a><br/><br/>
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

if($RowTR1[0] == null){
	echo "<h1>You have not entered any Training Records!</h1>";
} else {


echo "<h1>Your Training records are as follows:</h1>";?>

<div id="graph">Training Graphic Display Pie Chart</div>

<script type="text/javascript">
	var myData = new Array(['Skills Training', <?php echo $avgSkills[0]; ?>], ['Fitness Training', <?php echo $avgFitness[0]; ?>], ['Gym Training', <?php echo $avgGym[0]; ?>], ['Recovery Training', <?php echo $avgRecovery[0]; ?>]);
	var colors = ['#C40000', '#0000FF', '#006600', '#ff8000'];
	var myChart = new JSChart('graph', 'pie');
	myChart.setDataArray(myData);
	myChart.colorizePie(colors);
	myChart.setTitle('Training Averages Graphic Display');
	myChart.setTitleColor('#5555AA');
	myChart.setTitleFontSize(11);
	myChart.setTextPaddingTop(30);
	myChart.setSize(616, 321);
	myChart.setPiePosition(308, 170);
	myChart.setPieRadius(85);
	myChart.setPieUnitsColor('#555');
	myChart.setBackgroundImage('chart_bg.jpg');
	myChart.draw();
</script>
<?php
echo "<table border='1'>";
echo "<tr><th colspan='7'>Training Records Previously Entered</th></tr>";
echo "<tr><td>Date</td><td>Status</td><td>Training Type</td><td>Skills Time</td><td>Fitness Time</td><td>Gym Time</td><td>Recovery Time</td></tr>";
do {
echo "<tr><td>{$RowTR1[1]}</td>";
echo "<td>{$RowTR1[2]}</td>";
echo "<td>{$RowTR1[3]}</td>";
echo "<td>{$RowTR1[4]}</td>";
echo "<td>{$RowTR1[5]}</td>";
echo "<td>{$RowTR1[6]}</td>";
echo "<td>{$RowTR1[7]}</td></tr>";
$RowTR1 = mysqli_fetch_row($outputTraining);
} while ($RowTR1);
echo "<tr><td>Your Averages </td><td>n/a</td><td>n/a</td><td>{$avgSkills[0]}</td><td>{$avgFitness[0]}</td><td>{$avgGym[0]}</td><td>{$avgRecovery[0]}</td></tr>"; 
echo "</table>";

	};
?>

</div>

</body>
</html>

