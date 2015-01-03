<!DOCTYPE HTML>
 
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GFC STATS.COM</title>
  <link rel = "stylesheet" type="text/css" href="index2.css" />

<!--************************************************************************************
//optinal code to create a gradient effect on background
  <style type = "text/css">
  	body{
  	background-size: 200%;
  	background: -webkit-linear-gradient(#303030, #606060); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#303030, #606060); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#303030, #606060); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#303030, #606060); /* Standard syntax (must be last) */
}
  </style>
  **************************************************************************************
-->

	<!-- Script to rotate images on the site -->
  
  <script language="JavaScript1.2">

	var howOften = 5; //number often in seconds to rotate
	var current = 0; //start the counter at 0
	var ns6 = document.getElementById&&!document.all; //detect netscape 6

	// images placed here in the array
	var items = new Array();
	items[0]="<a href='link.htm' ><img alt='sprint picture' src=' largeImages/sprint1a.jpg' height='400' width='64%' border='0' /></a>"; //a linked image
	items[1]="<a href='link.htm'><img alt='image1 (9K)' src='largeImages/run2a.jpg' height='400' width='64%' border='0' /></a>"; //a linked image
	items[2]="<a href='link.htm'><img alt='image2 (9K)' src='largeImages/cp3a.jpg' height='400' width='64%' border='0' /></a>"; //a linked image
	items[3]="<a href='link.htm'><img alt='image3 (9K)' src='largeImages/strength1a.jpg' height='400' width='64%' border='' /></a>"; //a linked image
	items[4]="<a href='link.htm'><img alt='image4 (9K)' src='largeImages/kickera.jpg' height='400' width='64%' border='0' /></a>"; //a linked image
	
	items[5]="<a href='link.htm'><img alt='image5 (18K)' src='largeImages/WORDLE.jpg' height='400' width='64%' border='0' /></a>"; //a linked image
	

	function rotater() {
		document.getElementById("placeholder").innerHTML = items[current];
		current = (current==items.length-1) ? 0 : current + 1;
		setTimeout("rotater()",howOften*1000);
	}

	function rotater() {
		if(document.layers) {
	   	 	document.placeholderlayer.document.write(items[current]);
	    	document.placeholderlayer.document.close();
		}
		if(ns6)document.getElementById("placeholderdiv").innerHTML=items[current]
	    	if(document.all)
	        	placeholderdiv.innerHTML=items[current];

			current = (current==items.length-1) ? 0 : current + 1; //increment or reset
			setTimeout("rotater()",howOften*1000);
	}
	window.onload=rotater;
	//-->
 </script>

</head>


<body>
<!-- ******************************************************************************
Gavs css ? Section for login and logo in header
<link rel="stylesheet" type="text/css" href="headerfooter.css">

-->
  <div id="header" class="wrap">

      <img src ="largeImages/Logobevil.jpg" alt = "LOGO">
  <div class="menu-wrap">
      <nav class="menu">
          <ul class="clearfix">
              <li>
                <a href="index.php">Home<span class="arrow">&#9660;</span></a>
                
                <ul class="sub-menu">
                    <li><a href="index.php#comp">Be Competitive</a></li>
                    <li><a href="index.php#analyse">Analyse Yourself</a></li>
                    <li><a href="index.php#fact">Challenging Facts</a></li>
                </ul>
              </li>
              <li>
                 <a href="about.html">About us <span class="arrow">&#9660;</span></a>
   
                <ul class="sub-menu">
                    <li><a href="about.php#who">Who we are</a></li>
                    <li><a href="about.php#how">How it works</a></li>
                    <li><a href="about.php#analyse">Analyse</a></li>
                    <li><a href="about.php#res">Resources</a></li>
                </ul>
              </li>
              <li class="current item"> <a href="contact.php">Contact us <span class="arrow">&#9660;</span></a>
   
                <ul class="sub-menu">
                    <li><a href="contact.php#form">Contact form</a></li>
                    <li><a href="contact.php#map">Find us</a></li>
                    <li><a href="contact.php#email">Email</a></li>
                    <li><a href="contact.php#phone">Phone</a></li>
                </ul>
             <li>
                <a href="#">Analysis<span class="arrow">&#9660;</span></a>
                <ul class="sub-menu">
                    <li><a href="register.php">Register</a></li>
                    <li><a href="login.php">Profile</a></li>
                </ul>
                <li><a href = "./login.php">Login</a></li>
          </ul>
      </nav>
  </div>
</div>




<!-- Navigation Bar section****************************************************-->
<!--**************************old nav bar**********************
<br \>
<nav>
	<div class = "navigation">
		<ul>
  			<li><a href="#home">Home</a></li>
  			<li><a href="#selfcheck">Compare</a></li>
  			<li><a href="#contact">Contact</a></li>
  			<li><a href="#about">About</a></li>
		</ul>
	
	</div>
</nav>
<!--Gavs code using buttons**********************************************************
               <input type = "button" name = "home" value = "Home" onclick = "window.location.href='./index.php'">
               <input type = "button" name = "compare" value = "Comparison" onclick = "window.location.href='./comparison.php'">
               <input type = "button" name = "about" value = "About Us" onclick = "window.location.href='./about.php'">
               <input type = "button" name = "contact" value = "Contact Us" onclick = "window.location.href='./contact.php'">
-->
          

<!-- *************************************************************************************
NavBar is the section to the left with the links to the text-->
<br/>
<div id = "navBar">

	
		<p> <h3> <a href = "#comp">Be Competitive</a></h3></p><br>
<!-- ****************ANCHOR LINK HERE TO GO TO LINE ********************-->		
		<p> <h3><a href="#analyse">Analyse yourself</a></h3></p><br>
		<p> <h3><a href="#fact">Some Facts</a></h3></p><br>
		<p> <h3><a href="#comp">Read More</a></h3></p><br>
</div>

<!-- **************************************************************************************
TwitBar takes in the twitter feed -->

<div id = "twitBar">
	<a class="twitter-timeline" href="https://twitter.com/GaelicGamesStat/lists/gaastatsexperts" data-widget-id="541609805602099200"></a>

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
	if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
	fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	</script>
</div>

<!-- ***********************************************************************************
placeholder is the middle section for the rotating images--> 
<layer id="placeholderlayer"></layer>
<div id="placeholderdiv"></div>

<!--************************************************************************************ 
Section with the body text for the main page
-->
<section>
<div class="page-wrap" id="page-wrap">
  
 <a name = "comp"><h1>Be Competitive</h1></a>
 <p class = 'right'><img src="largeImages/jump.jpg" height="10%">
 Sport has always been competitive and as teams and individuals look to find that competitive edge optimal use of time and technology can make sure you are the best that you can be. Training alone can be challenging but setting goals and knowing the targets your competitors are aiming for and achieving can help focus the mind and body.</br>

</br>

 GFC Stats is all about you. Much of the information available on the site is public knowledge, though not always easy to find. In recent years a lot of effort and investment has gone in to analysing what works and what doesn’t. Although the results don’t produce a revolutionary short cut to success, what they do is produce a template for a quicker path to success. Thus template enables you to focus on those areas of your game that need improving to achieve even better results.</p>

  <a name = "analyse"><h1 style = "text-align:center">Analyse yourself</style></h1></a>
  <p class="left"><img style="float:left" src="largeImages/compare.jpg" height="10%"> 
  Each week you can build up a record of the training you have done, the goals you have achieved and the targets you want to pass. Your input can be compared with those of your peers, those of the elite players and against averages compiled  over time. By including your match facts you will be able to not only compare yourself to these other players but you can determine the relevant improvements in performance over time and how these translate to key performance indicators in matches.</p>
 
  <p class="right"> These show areas where improvement is quite achievable with the correct training. The key areas of focus are Strength, Speed/Agility, Fitness and Flexibility when it comes to the non- skills element of training. These are all areas that you can work on in your own time alone or with friends. Keeping of records of what is achieved is key to determining the effectiveness and future direction of your training. </p>
 
 </br>

  <h1>Facts to challenge you</h1>
  <a name = "fact"></a>
	<ul>
		<li> The average GAA player will travel between 7-10,000ms per match. A soccer player would run between 9-12,000m. </li>
		<li> The average GAA player sprints around 33km/hr compared to Usain Bolt who will sprints at 38km/hr.</li>
		<li> The average GAA player has leg strength of 110kg v’s rugby union players with 140kg.</li>
		<li> The average GAA player can jump 40cm in an explosive jump compared to 50 cm for a rugby union player. </li>
		<li> The average speed over 30m is 4.15s for a GAA player compared to 3.95s for a rugby player. </li>
	</ul>

     
</div>
</section>
<!-- ************************************************************************************
Footer details here
-->

<footer class="site-footer">

<div class="col">
  <h2>Sample links</h2>
  <ul>
    <li><a href="#">Terms & Conditions</a></li><br/>
    <li><a href="#">Sitemap</a></li><br/>
    <li><a href="#">Useful links</a></li><br/>
  </ul>
</div>
<div class="col">
  <h2>GFC-Stats.com</h2>
  <ul>
    <li>All material is copyright of gfc-stats.com</li>
    <li>Some of the material may be fictitious for the project</li>
    <li>All references to any known individuals are for demonstration purposes only</li>
  </ul>
</div>
<div class="col" id = "image">
  <h2>You can find us on:</h2>
  <ul>
    <li><a href="#facebook"><img style="float:left" src="largeImages/facebook.png" width="50px" height="50px"></a></li>
    <li><a href="#linkedin"><img style="float:left" src="largeImages/linkedin.jpg" width="50px" height= "50px"></a></li>
    <li><a href="#instagram"><img style="float:left" src="largeImages/instagram.png" width="50px" height= "50px"></a></li>
    <li><a href="#twitter"><img style="float:left" src="largeImages/twitter.png" width="50px" height= "50px"></a></li>
  </ul>
</div>
</footer>
</body>
</html>