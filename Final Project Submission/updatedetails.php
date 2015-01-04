<?php
@session_start();
include './dbconnection.php';

$positionQuery = "SELECT position FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$positionQueryOutput = mysqli_query($connection, $positionQuery);
$position = mysqli_fetch_row($positionQueryOutput);

$nameQuery = "SELECT name FROM userpass WHERE userpass.username = '" . $_SESSION["username"] . "'";
$nameQueryOutput = mysqli_query($connection, $nameQuery);
$name = mysqli_fetch_row($nameQueryOutput);

$emailQuery = "SELECT email FROM userpass WHERE userpass.username = '" . $_SESSION["username"] . "'";
$emailQueryOutput = mysqli_query($connection, $emailQuery);
$email = mysqli_fetch_row($emailQueryOutput);

$dobQuery = "SELECT date_of_birth FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$dobQueryOutput = mysqli_query($connection, $dobQuery);
$dob = mysqli_fetch_row($dobQueryOutput);

$genderQuery = "SELECT gender FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$genderQueryOutput = mysqli_query($connection, $genderQuery);
$gender = mysqli_fetch_row($genderQueryOutput);

$heightQuery = "SELECT height_in_meters FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$heightQueryOutput = mysqli_query($connection, $heightQuery);
$height = mysqli_fetch_row($heightQueryOutput);

$clubQuery = "SELECT club_name FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$clubQueryOutput = mysqli_query($connection, $clubQuery);
$club = mysqli_fetch_row($clubQueryOutput);

$countyQuery = "SELECT county_name FROM players JOIN userpass WHERE userpass.name = players.name AND userpass.username = '" . $_SESSION["username"] . "'";
$countyQueryOutput = mysqli_query($connection, $countyQuery);
$county = mysqli_fetch_row($countyQueryOutput);

?>

<html>
<head>
<title> Update Details</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="recordsstyle.css"/>
</head>
<body>

<header>
<img id="LineImage" src="./backendImages/LineImage.png" alt="Line Chart" />
<img id="BarImage" src="./backendImages/BarImage.png" alt="Bar Chart" />
<a id="LogoutButton" href="./logout.php">Logout</a>
<img id="WebImage" src="./backendImages/logo.jpg" alt="GFC Logo" /><br/>
Update Details<br/>
</header>

<div id = "leftcolumn">
<br/>
<a href="./profile.php">Profile</a><br/><br/>
<a href="./trainingrecords.php">Your Training Records</a><br/><br/>
<a href="./matchrecords.php">Your Match Records</a>
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

<form method="POST" action = "./testupdate.php">
<h1>Your Details:</h1><br/>
<label for="name">Name:</label><?php echo $name[0]; ?><br/><br/>
<label for="email">Enter an email address:</label> <input type = "text" name = "email" id = "email" required value="<?php echo $email[0]; ?>"/><br/><br/>
<label for="gender">Gender:</label>  <select id = "gender"  name = "gender">
<option value = "M">Male</option>
<option value = "F">Female</option></select><br/><br/>
<label for="dob">Date of Birth:</label>  <input type="date" name="dob" value = "dob" required value="<?php echo $dob[0]; ?>"><br/><br/><br/>
<label for="height">Height(Meters):</label> <input type = "text" name = "height" id = "height" required value="<?php echo $height[0]; ?>"/><br/><br/>
<label for="club">Club:</label> <input type = "text" name = "club" id = "club" required value="<?php echo $club[0]; ?>"/><br/><br/>
<label for="county">County:</label> <input type = "text" name = "county" id = "county" required value="<?php echo $county[0]; ?>"/><br/><br/>
<label for="position">Position:</label> <select id = "position" name = "position" required>
<option value = "Goalkeeper">Goalkeeper</option>
<option value = "Defender">Defender</option>
<option value = "Midfielder">Midfielder</option>
<option value = "Forward">Forward</option></select><br/><br/>
<input type="submit" name="Save" value="Update Details">
</form>

</div>

</body>
</html>