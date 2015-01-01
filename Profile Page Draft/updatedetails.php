<?php
include './dbconnection.php';

?>

<html>
<head>
<title> Update Details</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="recordsstyle.css"/>
</head>
<body>

<header>Update Details<br/>

<a href="draftprofileupdate.php">Profile</a>
<a href="./trainingrecords.php">Your Training Records</a>
<a href="./matchrecords.php">Your Match Records</a>
</header>

<div id = "leftcolumn">
<br/>
<a href="draftprofileupdate.php">Profile</a><br/><br/>
<a href="./trainingrecords.php">Your Training Records</a><br/><br/>
<a href="./matchrecords.php">Your Match Records</a>
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

<form method="POST" action = '#'>
<h1>Your Details:</h1><br/>
<label for="name">Name:</label> <input type="text" class = "textboxes" name="name" value = "name" required><br/><br/>
<label for="email">Enter an email address:</label> <input type = "text" name = "email" id = "email" required/><br/><br/>
<label for="gender">Gender:</label>  <select id = "gender"  name = "gender" required>
<option value = "M">Male</option>
<option value = "F">Female</option></select><br/><br/>
<label for="dob">Date of Birth:</label>  <input type="date" name="dob" value = "dob" required><br/><br/>
<label for="height">Height(Meters):</label> <input type = "text" name = "height" id = "height" required/><br/><br/>
<label for="club">Club:</label> <input type = "text" name = "club" id = "club" required/><br/><br/>
<label for="county">County:</label> <input type = "text" name = "county" id = "county" required/><br/><br/>
<label for="position">Position:</label> <select id = "position" name = "position" required>
<option value = "GOALKEEPER">Goalkeeper</option>
<option value = "DEFENDER">Defender</option>
<option value = "MIDFIELDER">Midfielder</option>
<option value = "FORWARD">Forward</option></select><br/><br/>
<input type="submit" name="Save" value="Update Details">
</form>

</div>

</body>
</html>