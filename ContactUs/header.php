<!DOCTYPE html>
<html>

<head>


</head>

<body>

	<link rel="stylesheet" type="text/css" href="headerfooter.css">

	 <div id="header">
          <div class="wrap">

               <img src ="" alt = "LOGO">

               <?php

                    //@session_start();
                    //echo session_id();
                    if(!session_id()){

                         echo "<div class = 'login'>";

                         echo "<a href = './login.php'> Login </a>";

                         echo"</div>";

                    }

                    else{

                         echo "<div class = 'login'>";

                         echo "<a href = './logout.php'> Logout </a>";

                         echo"</div>";

                    }



?><br \>
               <input type = "button" name = "home" value = "Home" onclick = "window.location.href='./index.php'">
               <input type = "button" name = "profile" value = "Profile" onclick = "window.location.href='./login.php'">
               <input type = "button" name = "about" value = "About Us" onclick = "window.location.href='./about.php'">
               <input type = "button" name = "contact" value = "Contact Us" onclick = "window.location.href='./contact.php'">

          </div>
     </div>

</body>

</html> 