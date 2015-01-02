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

//Training Time All County Player Queries
$queryT1 = "SELECT ROUND(AVG(skills_time_minutes),2) FROM training WHERE player_name <> '" . $name[0] . "'";
$outputT1 = mysqli_query($connection, $queryT1);
$RowT1 = mysqli_fetch_row($outputT1);
$queryT2 = "SELECT ROUND(AVG(fitness_time_minutes),2) FROM training WHERE player_name <> '" . $name[0] . "'";
$outputT2 = mysqli_query($connection, $queryT2);
$RowT2 = mysqli_fetch_row($outputT2);
$queryT3 = "SELECT ROUND(AVG(gym_time_minutes),2) FROM training WHERE player_name <> '" . $name[0] . "'";
$outputT3 = mysqli_query($connection, $queryT3);
$RowT3 = mysqli_fetch_row($outputT3);
$queryT4 = "SELECT ROUND(AVG(recovery_minutes),2) FROM training WHERE player_name <> '" . $name[0] . "'";
$outputT4 = mysqli_query($connection, $queryT4);
$RowT4 = mysqli_fetch_row($outputT4);

//Training Time Position County Player Queries
$queryT5 = "SELECT ROUND(AVG(skills_time_minutes),2) FROM training JOIN players WHERE players.name = training.player_name AND players.position = '" . $position[0] . "' AND training.player_name <> '" . $name[0] . "'";
$outputT5 = mysqli_query($connection, $queryT5);
$RowT5 = mysqli_fetch_row($outputT5);
$queryT6 = "SELECT ROUND(AVG(fitness_time_minutes),2) FROM training JOIN players WHERE players.name = training.player_name AND players.position = '" . $position[0] . "' AND training.player_name <> '" . $name[0] . "'";
$outputT6 = mysqli_query($connection, $queryT6);
$RowT6 = mysqli_fetch_row($outputT6);
$queryT7 = "SELECT ROUND(AVG(gym_time_minutes),2) FROM training JOIN players WHERE players.name = training.player_name AND players.position = '" . $position[0] . "' AND training.player_name <> '" . $name[0] . "'";
$outputT7 = mysqli_query($connection, $queryT7);
$RowT7 = mysqli_fetch_row($outputT7);
$queryT8 = "SELECT ROUND(AVG(recovery_minutes),2) FROM training JOIN players WHERE players.name = training.player_name AND players.position = '" . $position[0] . "' AND training.player_name <> '" . $name[0] . "'";
$outputT8 = mysqli_query($connection, $queryT8);
$RowT8 = mysqli_fetch_row($outputT8);

//Match All County Player Queries
$queryM1 = "SELECT ROUND(AVG(minutes_played),2) FROM appearances WHERE player_name <> '" . $name[0] . "'";
$outputM1 = mysqli_query($connection, $queryM1);
$RowM1 = mysqli_fetch_row($outputM1);
$queryM2 = "SELECT ROUND(AVG(distance_covered_meters),2) FROM appearances WHERE player_name <> '" . $name[0] . "'";
$outputM2 = mysqli_query($connection, $queryM2);
$RowM2 = mysqli_fetch_row($outputM2);
$queryM3 = "SELECT ROUND(AVG(possessions),2) FROM appearances WHERE player_name <> '" . $name[0] . "'";
$outputM3 = mysqli_query($connection, $queryM3);
$RowM3 = mysqli_fetch_row($outputM3);
$queryM4 = "SELECT ROUND(AVG((passes_complete/(passes_complete + passes_incomplete))*100),2) FROM appearances WHERE player_name <> '" . $name[0] . "'";
$outputM4 = mysqli_query($connection, $queryM4);
$RowM4 = mysqli_fetch_row($outputM4);
$queryM5 = "SELECT ROUND(AVG(((goals + points)/(shots_on_target + wides))*100),2) FROM appearances WHERE player_name <> '" . $name[0] . "'";
$outputM5 = mysqli_query($connection, $queryM5);
$RowM5 = mysqli_fetch_row($outputM5);

//Match Position County Player Queries
$queryM6 = "SELECT ROUND(AVG(minutes_played),2) FROM appearances JOIN players WHERE players.name = appearances.player_name AND players.position = '" . $position[0] . "' AND appearances.player_name <> '" . $name[0] . "'";
$outputM6 = mysqli_query($connection, $queryM6);
$RowM6 = mysqli_fetch_row($outputM6);
$queryM7 = "SELECT ROUND(AVG(distance_covered_meters),2) FROM appearances JOIN players WHERE players.name = appearances.player_name AND players.position = '" . $position[0] . "' AND appearances.player_name <> '" . $name[0] . "'";
$outputM7 = mysqli_query($connection, $queryM7);
$RowM7 = mysqli_fetch_row($outputM7);
$queryM8 = "SELECT ROUND(AVG(possessions),2) FROM appearances JOIN players WHERE players.name = appearances.player_name AND players.position = '" . $position[0] . "' AND appearances.player_name <> '" . $name[0] . "'";
$outputM8 = mysqli_query($connection, $queryM8);
$RowM8 = mysqli_fetch_row($outputM8);
$queryM9 = "SELECT ROUND(AVG((passes_complete/(passes_complete + passes_incomplete))*100),2) FROM appearances JOIN players WHERE players.name = appearances.player_name AND players.position = '" . $position[0] . "' AND appearances.player_name <> '" . $name[0] . "'";
$outputM9 = mysqli_query($connection, $queryM9);
$RowM9 = mysqli_fetch_row($outputM9);
$queryM10 = "SELECT ROUND(AVG(((goals + points)/(shots_on_target + wides))*100),2) FROM appearances JOIN players WHERE players.name = appearances.player_name AND players.position = '" . $position[0] . "' AND appearances.player_name <> '" . $name[0] . "'";
$outputM10 = mysqli_query($connection, $queryM10);
$RowM10 = mysqli_fetch_row($outputM10);

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

<a href="./trainingrecords.php">Your Training Records</a>
<a href="./matchrecords.php">Your Match Records</a>
<a href="./updatedetails.php">Update User Details</a>
</header>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>

<div id = "leftcolumn">
<br/>
<a href="./trainingrecords.php">Your Training Records</a><br/><br/>
<a href="./matchrecords.php">Your Match Records</a><br/><br/>
<a href="./updatedetails.php">Update User Details</a>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>

<div id = "mainbody">
<div id = "centerleft">

<form method="POST" action = '#'>
<h1>Please Enter your Training Details:</h1><br/>
<label for="training-date">Date of Training:</label> <input type="date" class = "textboxes" name="training-date" value = "training-date" required><br/><br/>
<label for="training-type">Type of Training:</label> <select id="training-type" class = "selectionboxes" name="training-type" required>
<option value="Personal">Personal</option>
<option value="Club">Club</option>
<option value="County">County</option>
</select><br/><br/>
<label for="status">What is your injury status?</label> <select id="status" class = "selectionboxes" name="status" required>
<option value="Injured">Injured</option>
<option value="OK">OK</option>
</select><br/><br/>
<label for="skills-training-length">Skills Training (in minutes)?</label> <input type="text" class = "textboxes" name="skills-training-length"><br/><br/>
<label for="fitness-training-length">Fitness Training (in minutes)?</label> <input type="text" class = "textboxes" name="fitness-training-length"><br/><br/>
<label for="gym-training-length">Gym Training (in minutes)?</label> <input type="text" class = "textboxes" name="gym-training-length"><br/><br/>
<label for="recovery-training-length">Recovery Time (in minutes)?</label> <input type="text" class = "textboxes" name="recovery-training-length"><br/><br/><br/>
How would you like to compare your details: <input type="radio" name="training-comparison" value = "0" /><b>All</b>
<input type="radio" name="training-comparison" value = "1" /><b>Position</b><br/><br/>
Would you like to save these details?<input type="checkbox" name="database-save" value="database-save"><br/><br/>
<!--Evaluate Button -->
<input type="submit" name="Evaluate" value="Evaluate Training Performance">
</form>

<?php
  $trainingDateCheck = isset($_POST['training-date']);
  $trainingTypeCheck =isset($_POST['training-type']);
  $statusCheck =isset($_POST['status']);
  $skillsLengthCheck =isset($_POST['skills-training-length']);
  $fitnessLengthCheck =isset($_POST['fitness-training-length']);
  $gymLengthCheck =isset($_POST['gym-training-length']);
  $recoveryLengthCheck =isset($_POST['recovery-training-length']);
  $trainingComparisonCheck =isset($_POST['training-comparison']);
  $databaseSaveCheck = isset($_POST['database-save']);

 if ($trainingDateCheck && $trainingTypeCheck && $statusCheck && $skillsLengthCheck && $fitnessLengthCheck && $gymLengthCheck && $recoveryLengthCheck && $trainingComparisonCheck) {
    
  $trainingDate = $_POST["training-date"];
  $trainingType = $_POST["training-type"];
  $status = $_POST["status"];
  $skillsLength = $_POST["skills-training-length"];
  $fitnessLength = $_POST["fitness-training-length"];
  $gymLength = $_POST["gym-training-length"];
  $recoveryLength = $_POST["recovery-training-length"];
  $trainingComparison = $_POST["training-comparison"];

  if($trainingComparison == 0){
    echo "<table width='80%' border='1'>";
    echo "<tr><th colspan='6' align='center'>Training Time Comparison (in minutes)</th></tr>";
    echo "<tr><td></td><td>Skills Time</td><td>Fitness Time</td><td>Tactical Time</td><td>Recovery Time</td></tr>";
    echo "<tr><td>County Players (Average)</td><td>{$RowT1[0]}</td><td>{$RowT2[0]}</td><td>{$RowT3[0]}</td><td>{$RowT4[0]}</td></tr>";
    echo "<tr><td>You</td>
    <td>{$skillsLength}</td>
    <td>{$fitnessLength}</td>
    <td>{$gymLength}</td>
    <td>{$recoveryLength}</td>";
    echo "<tr><td>Comparison</td><td>" . ROUND(($skillsLength/$RowT1[0])*100) . "%</td><td>" . ROUND(($fitnessLength/$RowT2[0])*100) . "%</td><td>" . ROUND(($gymLength/$RowT3[0])*100) . "%</td><td>" . ROUND(($recoveryLength/$RowT4[0])*100) . "%</td></tr>";
    echo "</table><br/><br/><br/>";
} else {
    echo "<table width='80%' border='1'>";
    echo "<tr><th colspan='5' align='center'>Training Time Comparison (in minutes)</th></tr>";
    echo "<tr><td></td><td>Skills Time</td><td>Fitness Time</td><td>Gym Time</td><td>Recovery Time</td></tr>";
    echo "<tr><td>County Players (Average)</td><td>{$RowT5[0]}</td><td>{$RowT6[0]}</td><td>{$RowT7[0]}</td><td>{$RowT8[0]}</td></tr>";
    echo "<tr><td>You</td>
    <td>{$skillsLength}</td>
    <td>{$fitnessLength}</td>
    <td>{$gymLength}</td>
    <td>{$recoveryLength}</td>";
    echo "<tr><td>Comparison</td><td>" . ROUND(($skillsLength/$RowT5[0])*100) . "%</td><td>" . ROUND(($skillsLength/$RowT6[0])*100) . "%</td><td>" . ROUND(($skillsLength/$RowT7[0])*100) . "%</td><td>" . ROUND(($skillsLength/$RowT8[0])*100) . "%</td></tr>";
    echo "</table><br/><br/><br/>";
}?>

<!--need to make the chart changeable in the same way as we've made the table changeable for position vs. all -->

<div id="chartcontainer"> <!--Grahpic Display--></div>

<script type="text/javascript">
var myData1A = new Array([10, <?php echo $RowT1[0]; ?>], [15, <?php echo $RowT2[0]; ?>], [20, <?php echo $RowT3[0]; ?>], [25, <?php echo $RowT4[0]; ?>]);
var myData1B = new Array([10, <?php echo $RowT5[0]; ?>], [15, <?php echo $RowT6[0]; ?>], [20, <?php echo $RowT7[0]; ?>], [25, <?php echo $RowT8[0]; ?>]);
var myData2 = new Array([10, <?php echo $_POST['skills-training-length']; ?>], [15, <?php echo $_POST['fitness-training-length']; ?>], [20, <?php echo $_POST['gym-training-length']; ?>], [25, <?php echo $_POST['recovery-training-length']; ?>]);
var myChart = new JSChart('chartcontainer', 'line');
<?php if($_POST['training-comparison'] == 0){ ?>
myChart.setDataArray(myData1A, 'line_1');
<?php } else { ?>
myChart.setDataArray(myData1B, 'line_1');
<?php } ?>
myChart.setDataArray(myData2, 'line_2');
myChart.setAxisNameX('Training Types');
myChart.setAxisNameColorX('#5555AA');
myChart.setAxisNameY('Mins');
myChart.setIntervalStartY(0);
myChart.setAxisNameColorY('#5555AA');
myChart.setSize(360,360);
myChart.setLineColor('#0000ff', 'line_1');
myChart.setLineColor('#006600', 'line_2');
myChart.setLineWidth(3);
myChart.setTitle('Training Comparison Graph');
myChart.setTitleColor('#5555AA');
myChart.setTitleFontSize(12);
/*myChart.setBackgroundColor('#f8f8f8');*/
myChart.setAxisValuesNumberX(4);
myChart.setShowXValues(false);
myChart.setAxisValuesColorX('#5555AA');
myChart.setAxisValuesColorY('#5555AA');
myChart.setAxisValuesNumberY(10);
myChart.setAxisValuesDecimalsY(0);
myChart.setLabelX([10, 'Skills']);
myChart.setLabelX([15, 'Fitness']);
myChart.setLabelX([20, 'Gym']);
myChart.setLabelX([25, 'Recovery']);
myChart.setLabelColorX('#5555AA');
myChart.draw();
</script>

    <?php if($databaseSaveCheck){
      $newUserTrainingData = "INSERT INTO training VALUES ('$name', '$trainingDate', '$status', '$trainingType', '$skillsLength', '$fitnessLength', '$gymLength', '$recoveryLength')";
      $insertTrainingData = @mysqli_query($connection, $newUserTrainingData);
    }
  };
?>

</div>


<!------------------------------------------------------------------------------------------------------------------------------------------------------>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>

<div id = "centerright">

<form method="POST" action = '#'>
<h1>Please Enter your Match Details:</h1><br/>
<label for="match-date">Date of Match:</label> <input type="date" class = "textboxes" name="match-date" value = "match-date" required><br/><br/>
<label for="match-type">Type of Match:</label> <select id="match-type" class = "selectionboxes" name="match-type" required>
<option value="Club">Club</option>
<option value="County">County</option>
</select><br/><br/>
<label for="minutes-played">Minutes Played:</label> <input type="text" class = "textboxes" name="minutes-played"><br/><br/>
<label for="distance-covered">Distance Covered in meters:</label> <input type="text" class = "textboxes" name="distance-covered"><br/><br/>
<label for="possessions">Number of Possessions:</label> <input type="text" class = "textboxes" name="possessions"><br/><br/>
<label for="passes-complete">Passes Complete:</label> <input type="text" class = "textboxes" name="passes-complete"><br/><br/>
<label for="passes-incomplete">Passes Incomplete:</label> <input type="text" class = "textboxes" name="passes-incomplete"><br/><br/>
<label for="attempts">Attempts:</label> <input type="text" class = "textboxes" name="attempts"><br/><br/>
<label for="goals">Goals:</label> <input type="text" class = "textboxes" name="goals"><br/><br/>
<label for="points">Points:</label> <input type="text" class = "textboxes" name="points"><br/><br/><br/>
How would you like to compare your details: <input type="radio" name="match-comparison" value = "0" /><b>All</b>
<input type="radio" name="match-comparison" value = "1" /><b>Position</b><br/><br/>
Would you like to save these details?<input type="checkbox" name="database-save2" value="database-save2"><br/><br/>

<!--Evaluate Button -->
<input type="submit" name="Evaluate" value="Evaluate Match Performance">
</form>


<?php
  $matchDateCheck = isset($_POST['match-date']);
  $matchTypeCheck = isset($_POST['match-type']);
  $minsPlayedCheck = isset($_POST['minutes-played']);
  $distanceCoveredCheck = isset($_POST['distance-covered']);
  $possessionsCheck = isset($_POST['possessions']);
  $passesCompleteCheck = isset($_POST['passes-complete']);
  $passesIncompleteCheck = isset($_POST['passes-incomplete']);
  $attemptsCheck = isset($_POST['attempts']);
  $goalsCheck = isset($_POST['goals']);
  $pointsCheck = isset($_POST['points']);
  $matchComparisonCheck = isset($_POST['match-comparison']);
  $databaseSaveCheck2 = isset($_POST['database-save2']);

  if($matchDateCheck && $matchTypeCheck && $minsPlayedCheck && $distanceCoveredCheck && $possessionsCheck && $passesCompleteCheck && $passesIncompleteCheck &&$attemptsCheck && $goalsCheck && $pointsCheck && $matchComparisonCheck) {

  $matchDate = $_POST['match-date'];
  $matchType = $_POST['match-type'];
  $minutesPlayed = $_POST['minutes-played'];
  $distanceCovered = $_POST['distance-covered'];
  $possessions = $_POST['possessions'];
  $passesComplete = $_POST['passes-complete'];
  $passesIncomplete = $_POST['passes-incomplete'];
  $passCompletionPercentage = ROUND(($passesComplete / ($passesComplete + $passesIncomplete))*100);
  $attempts = $_POST['attempts'];
  $goals = $_POST['goals'];
  $points = $_POST['points'];
  $shotSuccessPercentage = ROUND((($goals + $points) / $attempts)*100);
  $distancePerMinute = ROUND($distanceCovered / $minutesPlayed);
  $matchComparison = $_POST['match-comparison'];

  if($matchComparison == 0){
    echo "<table width='80%' border='1'>";
    echo "<tr><th colspan='6' align='center'>Match KPI Comparison</th></tr>";
    echo "<tr><td></td><td>Minutes Played</td><td>Distance Covered (Mtrs)</td><td>Possessions</td><td>Pass Completion %</td><td>Shot Success %</td></tr>";
    echo "<tr><td>County Players (Average)</td><td>{$RowM1[0]}</td><td>{$RowM2[0]}</td><td>{$RowM3[0]}</td><td>{$RowM4[0]}%</td><td>{$RowM5[0]}%</td></tr>";
    echo "<tr><td>You</td>
      <td>{$minutesPlayed}</td>
      <td>{$distanceCovered}</td>
      <td>{$possessions}</td>
      <td>{$passCompletionPercentage}%</td>
      <td>{$shotSuccessPercentage}%</td></tr>";
    echo "<tr><td>Comparison</td><td>" . ROUND(($minutesPlayed/$RowM1[0])*100) . "%</td><td>" . ROUND(($distanceCovered/$RowM2[0])*100) . "%</td><td>" . ROUND(($possessions/$RowM3[0])*100) . "%</td><td>" . ROUND(($passCompletionPercentage/$RowM4[0])*100) . "%</td><td>" . ROUND(($shotSuccessPercentage/$RowM5[0])*100) . "%</td></tr>";
    echo "</table><br/><br/><br/>";
  } else {
     echo "<table width='80%' border='1'>";
    echo "<tr><th colspan='6' align='center'>Match KPI Comparison</th></tr>";
    echo "<tr><td></td><td>Minutes Played</td><td>Distance Covered (Mtrs)</td><td>Possessions</td><td>Pass Completion %</td><td>Shot Success %</td></tr>";
    echo "<tr><td>County Players (Average)</td><td>{$RowM6[0]}</td><td>{$RowM7[0]}</td><td>{$RowM8[0]}</td><td>{$RowM9[0]}%</td><td>{$RowM10[0]}%</td></tr>";
    echo "<tr><td>You</td>
      <td>{$minutesPlayed}</td>
      <td>{$distanceCovered}</td>
      <td>{$possessions}</td>
      <td>{$passCompletionPercentage}%</td>
      <td>{$shotSuccessPercentage}%</td></tr>";
    echo "<tr><td>Comparison</td><td>" . ROUND(($minutesPlayed/$RowM6[0])*100) . "%</td><td>" . ROUND(($distanceCovered/$RowM7[0])*100) . "%</td><td>" . ROUND(($possessions/$RowM8[0])*100) . "%</td><td>" . ROUND(($passCompletionPercentage/$RowM9[0])*100) . "%</td><td>" . ROUND(($shotSuccessPercentage/$RowM10[0])*100) . "%</td></tr>";
    echo "</table><br/><br/><br/>";
  } 
  ?>

 <div id="chartcontainer2"><!--Grahpic Display--></div>
<script type="text/javascript">
var myData2A = new Array(['Distance(Mtrs) per Min', <?php echo ROUND($RowM2[0]/$RowM1[0]); ?>, <?php echo  $distancePerMinute; ?>], ['Poss', <?php echo $RowM3[0]; ?>, <?php echo $_POST['possessions']; ?>], ['Pass Comp %', <?php echo $RowM4[0]; ?>, <?php echo $passCompletionPercentage; ?>], ['Sht Succ %', <?php echo $RowM5[0]; ?>, <?php echo $shotSuccessPercentage; ?>]);
var myData2B = new Array(['Distance(Mtrs) per Min', <?php echo ROUND($RowM7[0]/$RowM6[0]); ?>, <?php echo  $distancePerMinute; ?>], ['Poss', <?php echo $RowM8[0]; ?>, <?php echo $_POST['possessions']; ?>], ['Pass Comp %', <?php echo $RowM9[0]; ?>, <?php echo $passCompletionPercentage; ?>], ['Sht Succ %', <?php echo $RowM10[0]; ?>, <?php echo $shotSuccessPercentage; ?>]);
var myChart2 = new JSChart('chartcontainer2', 'bar');
<?php if($_POST['match-comparison'] == 0){ ?>
myChart2.setDataArray(myData2A);
<?php } else { ?>
myChart2.setDataArray(myData2B);
<?php } ?>
myChart2.setBarColor('#0000ff', 1);
myChart2.setBarColor('#006600', 2);
myChart2.setAxisNameX('Match KPIs');
myChart2.setAxisNameColorX('#5555AA');
myChart2.setAxisNameY('Avgs');
myChart2.setAxisNameColorY('#5555AA');
myChart2.setSize(520, 360);
myChart2.setTitle('Match KPI Comparison Graph');
myChart2.setTitleColor('#5555AA');
myChart2.setTitleFontSize(12);
myChart2.setAxisValuesColorX('#5555AA');
myChart2.setAxisValuesColorY('#5555AA');
myChart2.setAxisValuesNumberY(10);
myChart2.setAxisValuesDecimalsY(0);
/*myChart2.setBackgroundColor('#f8f8f8');*/
myChart2.draw();
</script>
</div>


<?php
if($databaseSaveCheck2){
      $newUserMatchData = "INSERT INTO appearances VALUES ('$name', '$matchDate', '$matchType', '$minutesPlayed', '$distanceCovered', '$possessions', 'null', 'null', 'null', '$passesComplete', 'null', 'null', '$passesIncomplete', '$attempts', 'null', 'null', 'null', '$goals', '$points', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null')";
      $insertMatchData = @mysqli_query($connection, $newUserMatchData); 
    }

  };?>



</div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>

<div id = "rightcolumn">
<br/>

<!--assumption USER has logged in and has accessed the page -->
<!--They have accessed with their username which is stored in our database and in registering for our site they will have provided their name, dob, gender, club, county, position, etc.-->


Name: <?php echo $name[0]; ?><br/><br/>

Date of Birth: <?php echo $dob[0]; ?><br/><br/>  

Gender: <?php echo $gender[0]; ?><br/><br/>

Club: <?php echo $club[0]; ?><br/><br/>

County: <?php echo $county[0]; ?><br/><br/>

Position: <?php echo $position[0]; ?> <br/><br/>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>


<!--<footer>
    Registered to GFC
</footer>-->


</body>

</html>