<?php
session_start();
if(!session_is_registered(username)){
header("location:index.php");
}
?>

<html>
<body>
Test for Login Successful
</body>
</html>