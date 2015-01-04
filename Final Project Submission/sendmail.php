<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]==""){
echo "Fill All Fields..";
}else{

$email=$_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From:'. $email . "\r\n"; // Sender's Email
$headers .= 'CC: '. $email . "\r\n"; //Send emai back to sender in CC
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("gfcstats@gfc.dxhost.net", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
echo "Return to <a href = 'index.php'>Homepage</a>.";
}
}
?>