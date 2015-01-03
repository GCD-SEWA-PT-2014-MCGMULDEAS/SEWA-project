<?php
session_start();
//if(!$_SESSION['username'] = $myusername){
if(!session_id()){
header("location:login.php");
}
?>