<?php
include './dbconnection.php';

//$county =$_POST["county"];
//$position = $_POST["position"];

//Training Time County Player Queries
$queryT1 = "SELECT AVG(skills_time_minutes) FROM training";
$outputT1 = mysqli_query($connection, $queryT1);
$RowT1 = mysqli_fetch_row($outputT1);
$queryT2 = "SELECT AVG(fitness_time_minutes) FROM training";
$outputT2 = mysqli_query($connection, $queryT2);
$RowT2 = mysqli_fetch_row($outputT2);
$queryT3 = "SELECT AVG(tactical_time_minutes) FROM training";
$outputT3 = mysqli_query($connection, $queryT3);
$RowT3 = mysqli_fetch_row($outputT3);
$queryT4 = "SELECT AVG(recovery_minutes) FROM training";
$outputT4 = mysqli_query($connection, $queryT4);
$RowT4 = mysqli_fetch_row($outputT4);

//Match County Player Queries
$queryM1 = "SELECT AVG(minutes_played) FROM appearances";
$outputM1 = mysqli_query($connection, $queryM1);
$RowM1 = mysqli_fetch_row($outputM1);
$queryM2 = "SELECT AVG(distance_covered_meters) FROM appearances";
$outputM2 = mysqli_query($connection, $queryM2);
$RowM2 = mysqli_fetch_row($outputM2);
$queryM3 = "SELECT AVG(possessions) FROM appearances";
$outputM3 = mysqli_query($connection, $queryM3);
$RowM3 = mysqli_fetch_row($outputM3);

$queryM6 = "SELECT AVG(goals) FROM appearances";
$outputM6 = mysqli_query($connection, $queryM6);
$RowM6 = mysqli_fetch_row($outputM6);
$queryM7 = "SELECT AVG(points) FROM appearances";
$outputM7 = mysqli_query($connection, $queryM7);
$RowM7 = mysqli_fetch_row($outputM7);
?>

<html>
<head>
<title> Profile page</title>
  <meta charset="UTF-8">
  <script type="text/javascript" src="jscharts.js"></script>
  <link rel="stylesheet" type="text/css" href="draftprofilestyle.css"/>
</head>
<body>


<header>Player Profile<br/>

<a href="">Your Training Records</a>
<a href="">Your Match Records</a>
</header>


<div id = "leftcolumn">
<br/>
<a href="">Your Training Records</a><br/><br/>
<a href="">Your Match Records</a>
</div>

<div id = "mainbody">
<div id = "centerleft">
<table width='80%' border='1'>
<tr><th colspan="5" align="center">Training Time Comparison (in minutes)</th></tr>
<tr><td></td><td>Skills Time</td><td>Fitness Time</td><td>Tactical Time</td><td>Recovery Time</td></tr>
<tr><td>County Players (Average)</td>
<?php echo "<td>{$RowT1[0]}</td>" ?>
<?php echo "<td>{$RowT2[0]}</td>" ?>
<?php echo "<td>{$RowT3[0]}</td>" ?>
<?php echo "<td>{$RowT4[0]}</td>" ?></tr>
<tr><td>You</td><td>10</td><td>100</td><td>1000</td><td>10000</td></tr>
<tr><td>Comparison</td><td>0</td><td>100</td><td>1000</td><td>10000</td></tr>
</table><br/><br/><br/>

<div id="chartcontainer">Javascript is not available or used for SEO purposes</div>

<script type="text/javascript">
var myData = new Array([10, <?php echo $RowT1[0]; ?>], [15, <?php echo $RowT2[0]; ?>], [20, <?php echo $RowT3[0]; ?>], [25, <?php echo $RowT4[0]; ?>]);
var myData2 = new Array([10, 10], [15, 15], [20, 25], [25, 30]);
var myChart = new JSChart('chartcontainer', 'line');
myChart.setDataArray(myData, 'line_1');
myChart.setDataArray(myData2, 'line_2');
myChart.setAxisNameX('Training Types');
myChart.setAxisNameY('Minutes');
myChart.setSize(350,350);
/*myChart.setBackgroundColor('#EBEBE0');*/
myChart.setLineColor('#0000ff', 'line_1');
myChart.setLineColor('#006600', 'line_2');
myChart.setTitle('Training Comparison Graph');
myChart.setTitleColor('#5555AA');
myChart.setTitleFontSize(12);
myChart.draw();
</script>
</div>

<div id = "centerright">


<table width='100%' border='1'>
<tr><th colspan="8" align="center">Match KPI Comparison</th></tr>
<tr><td></td><td>Minutes Played</td><td>Distance Covered (Mtrs)</td><td>Possessions</td><td>Pass Completion %</td><td>Shot Success %</td><td>Goals</td><td>Points</td></tr>
<tr><td>County Players (Average) </td><?php echo "<td>{$RowM1[0]}</td>" ?><?php echo "<td>{$RowM2[0]}</td>" ?><?php echo "<td>{$RowM3[0]}</td>" ?><td>0%</td><td>0%</td><?php echo "<td>{$RowM6[0]}</td>" ?><?php echo "<td>{$RowM7[0]}</td>" ?></tr>
<tr><td>You</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>Comparison</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
</table><br/><br/>


<div id="chartcontainer2">Javascript is not available or used for SEO purposes</div>

<script type="text/javascript">
var myData2 = new Array(['Mins Pld', <?php echo $RowM1[0]; ?>, 5], ['Poss', <?php echo $RowM3[0]; ?>, 30], ['Pass %', 0, 20], ['Sht Succ %', 0, 15], ['Gls', <?php echo $RowM6[0]; ?>, 10], ['Pts', <?php echo $RowM7[0]; ?>, 10]);
var myChart2 = new JSChart('chartcontainer2', 'bar');
myChart2.setDataArray(myData2);
myChart2.setBarColor('#0000ff', 1);
myChart2.setBarColor('#006600', 2);
myChart2.setAxisNameX('Match KPIs');
myChart2.setAxisNameY('Averages');
myChart2.setSize(380, 380);
myChart2.setTitle('Match KPI Comparison Graph');
myChart2.setTitleColor('#5555AA');
myChart2.setTitleFontSize(12);
myChart2.draw();
</script>
</div>

</div>
</div>

<div id = "rightcolumn">
<br/>
Name: Cathal Mulkere<br/><br/>

Date of Birth: 19/05/1985<br/><br/>  

Gender: Male<br/><br/>

Club: Crusheen<br/><br/>

County: Clare<br/><br/>

Province: Munster<br/><br/>

Position: Forward<br/><br/>
</div>



<footer>Registered to GFC</footer>



</body>
</html>