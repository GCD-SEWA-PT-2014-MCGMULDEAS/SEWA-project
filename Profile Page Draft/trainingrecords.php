<?php
include './dbconnection.php';
?>

<?php 
$usersName = "Michael Darragh McAuley";
$trainingRecords = "SELECT * FROM training WHERE player_name = '" . $usersName . "'";
$outputTraining = mysqli_query($connection, $trainingRecords);
$RowTR1 = mysqli_fetch_row($outputTraining); 

//Training Averages for Chart and table
$avgSkillsQuery = "SELECT ROUND(AVG(skills_time_minutes),2) FROM training WHERE player_name = '" . $usersName . "'";
$avgSkillsOutput = mysqli_query($connection, $avgSkillsQuery);
$avgSkills = mysqli_fetch_row($avgSkillsOutput);
$avgFitnessQuery = "SELECT ROUND(AVG(fitness_time_minutes),2) FROM training WHERE player_name = '" . $usersName . "'";
$avgFitnessOutput = mysqli_query($connection, $avgFitnessQuery);
$avgFitness = mysqli_fetch_row($avgFitnessOutput);
$avgGymQuery = "SELECT ROUND(AVG(gym_time_minutes),2) FROM training WHERE player_name = '" . $usersName . "'";
$avgGymOutput = mysqli_query($connection, $avgGymQuery);
$avgGym = mysqli_fetch_row($avgGymOutput);
$avgRecoveryQuery = "SELECT ROUND(AVG(recovery_minutes),2) FROM training WHERE player_name = '" . $usersName . "'";
$avgRecoveryOutput = mysqli_query($connection, $avgRecoveryQuery);
$avgRecovery = mysqli_fetch_row($avgRecoveryOutput);
?>

<html>
<head>
<title> Training Records page</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="recordsstyle.css"/>
</head>
<body>
<header>Training Records<br/>

<a href="draftprofileupdated.php">Profile Page</a>
<a href="matchrecords.php">Your Match Records</a>
<a href="updatedetails.php">Update User Details</a>
</header>

<div id = "leftcolumn">
<br/>
<a href="draftprofileupdated.php">Profile Page</a><br/><br/>
<a href="matchrecords.php">Your Match Records</a><br/><br/>
<a href="updatedetails.php">Update User Details</a>
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

<!------------------------------------------------------------------------------------------------------------------------------------------------------>

<div id = "mainbody">
<h1> Your Training records are as follows: </h1>
<?php echo "<table width='80%' border='1'>";
echo "<tr><th colspan='7' align='center'>Training Records Previously Entered</th></tr>";
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

?>

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



</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>

</body>
</html>

