<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["name"]==""||$_POST["email"]==""||$_POST["subject"]==""||$_POST["message"]==""){
echo "Fill All Fields..";
}else{

$altemail = "gaelicgamesstatistics@gmail.com";
$email=$_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From:'. $email . "\r\n"; // Sender's Email
/*$headers = 'From:'. $email . "\r\n"; //my email*/
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
/*"gfcstats@gfc.dxhost.net"*/
mail($altemail, $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";

}
}
?>