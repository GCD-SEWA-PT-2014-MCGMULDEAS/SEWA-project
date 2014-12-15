<?php
session_start();
//if(!$_SESSION['username'] = $myusername){
if(!session_id()){
header("location:index.php");
}

else{

echo 'Welcome';

}
?>

<html>
<body>
Test for Login Successful
</body>
</html>