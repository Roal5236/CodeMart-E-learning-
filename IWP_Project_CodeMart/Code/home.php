<!DOCTYPE html>
<html>
<head>
	<title>CodeMART</title>

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="GA.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

	<link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet"> 

</head>
<body style="margin:0px;font-family: 'Open Sans',sans-serif;width:100%;overflow-x:hidden;">

<div id="backgroundImage" style="position:fixed;top:0px;z-index:-1;width:100%;background-image:url('../Images/back6.jpg');height:600px;padding-top:200px">

<center>
<h1 style="font-size:60px;color:#ffffff">WELCOME TO CODEMART</h1>
<H2 style="font-size:20px;color:#ffffff">THE ONE PLACE WHERE HE CAN LEARN ANYTHING</H2> 
</center>

	
</div>

<?php

include("nav.html");

?>




<div id="littleInfo" style="width:100%;margin-top:500px;background-color:#ffffff;height:400px;text-align:center;padding:50px;">

	<h1 style="color: #ff0000">BRINGING THE WORLD OF CODE TO YOU</h1>

	<div style="width:80%;margin-left:auto;margin-right:auto;padding-top:50px;">

	<div style="width:20%;float:left;margin-left:5%;padding:20px;">
		<div id="iconDiscriptions">
			<img src="../Images/bulb.svg" style="width:5rem;height:5rem;">
		</div>
		<h1>Master the most competitive skills</h1>
	</div>

	<div style="width:20%;float:left;margin-left:10%;padding:20px;">
		<div id="iconDiscriptions">
			<img src="../Images/badge.svg" style="width:5rem;height:5rem;">
		</div>
			<h1>Get hired by world changing companies</h1>
		
		
	</div>

	<div style="width:20%;margin-left:auto;margin-right:auto;float:left;margin-left:10%;padding:20px;">
		<div id="iconDiscriptions">
			<img src="../Images/keys.svg" style="width:5rem;height:5rem;">
		</div>
		<h1>Maximize your impact</h1>
	</div>
		
	</div>
	
</div>

<div style="width:100%;height:300px;background:linear-gradient(to bottom right, #ff9933, #ff0000);;text-align:center;margin-top:0px;background-size:100%;padding-top:100px;padding-bottom:100px">

	<div style="width:60%;padding:20px;background-color:#ffffff;margin-left:auto;margin-right: auto;height:60%">

		<div style="width:80%;padding:0px;background-color:#ffffff;margin-left:auto;margin-right: auto;height:60%">

			<img src="../Images/mag.svg" style="float:left;margin:3%">

		<div style="float:left;">
			<h1 style="font-size:40px;color:#ff0000">Imagine your future!</h1>	
			<p style="font-size:20px;color:grey">What do you want to learn today? What's your dream job?<br> Discover the program that's right for you!</p>
		</div>
		

		<br>
		<br>
		<button style="background-color:#ff0000;border:1px solid #ff0000;border-radius:5px;font-size:20px;color:white;padding:10px;float:left;font-size:30px;margin-left:10px ">GET STARTED</button>

	</div>

			
		</div>
		
		

</div>



<div style="width:100%;background-color:#ffffff;height:500px;text-align:center;padding-bottom:100px;padding-top:100px">

		<h1 style="font-size:65px;color:#ff0000;margin:0px;">COURSES</h1>
		<p style="font:70px;color:grey">Infinite Learning for the Infinite Mind</p>

		<div style="width:80%;margin:auto;">

		<a href="
		
		<?php 

		if($_GET['login']=='yes')
		{
			echo 'category.php?diff=-1';
		}


		else
		{
			echo 'login.php';
		}

		?>
		"><div id="CoursesDiv" style="width:20%;float:left;">
				<div id="CoursesDiv2">
					<img src="../Images/c.jpg" id="CoursesImg" style="width:300px">
					<p id="CoursesNames">MIPS</p>
				</div>
			</div></a>

			<a href="
		
		<?php 

		if($_GET['login']=='yes')
		{
			echo 'category2.php?diff=-1';
		}


		else
		{
			echo 'login.php';
		}

		?>
		"><div id="CoursesDiv" style="width:20%;float:left;">
				<div id="CoursesDiv2">
					<img src="../Images/C++.png" id="CoursesImg" style="width:300px">
					<p id="CoursesNames">MIPS</p>
				</div>
			</div></a>

			<div id="CoursesDiv" style="width:20%;float:left;">
				<div id="CoursesDiv2">
					<img src="../Images/JAVA.png" id="CoursesImg" style="width:300px">
					<p id="CoursesNames">MIPS</p>
				</div>
			</div>
		</div>

</div>


<div style="width:100%;height:600px;background-color:white;float:left">

	<div style="width:100%;text-align:center;">
		<h1 style="font-size:65px;color:#ff0000;margin:0px;">WHY US?</h1>
	</div>
	

	<div style="width:30%;height:500px;float:left;margin-left:5%;position:relative;margin-top:5%">

		<img src="../Images/adv1.jpg" style="width:70%;margin-left:45%;margin-top:5%;position:absolute;z-index:1;border:1px solid #ffffff;border-radius:20px">
		<img src="../Images/adv2.jpg" style="width:50%;margin-left:18%;margin-top:30%;position:absolute;z-index:2;border:1px solid #ffffff;border-radius:20px">

	</div>
	

	<div style="width:47%;float:left;margin-left:15%;margin-top:6%;height:60%;">

		<div id="iconDiscriptions2">
			<img src="../Images/bulb.svg" style="width:5rem;height:5rem;">
		</div>
	
		<h1 style="color:#ff0000;font-style:Helvetica;">Master the most competitive skills</h1>

		<p style="color:black;width:50%;text-align:justify;">Our Nanodegree programs are built with the world's most forward thinking companies Google, Facebook, AT&T, IBM, GitHub, and more. Our expert project reviewers, mentors and coaches ensure that you're job-ready.</p>
	</div>
	
</div>

<div style="width:100%;height:400px;background-color:white;float:left;">

	<div style="width:47%;float:left;margin-left:15%;margin-top:6%">

		<div id="iconDiscriptions2">
			<img src="../Images/badge.svg" style="width:5rem;height:5rem;">
		</div>
	
		<h1 style="color:#e60073">Get hired by world changing companies</h1>

		<p style="color:black;width:50%;text-align:justify;">Hiring partnerships with leaders like IBM, Mercedes–Benz, Didi Chuxing, and more open amazing career opportunities... and Blitz gives you a new path to getting hired.</p>
	</div>

	<div style="width:30%;height:500px;float:left;margin-left:0%;position:relative;">

		<img src="../Images/adv3.jpg" style="width:70%;margin-left:45%;margin-top:5%;position:absolute;z-index:1;border:1px solid #ffffff;border-radius:20px">
		<img src="../Images/adv4.jpg" style="width:50%;margin-left:18%;margin-top:30%;position:absolute;z-index:2;border:1px solid #ffffff;border-radius:20px">

	</div>
	
	
</div>


<div style="width:100%;height:70%;background-color:white;float:left">

	<div style="width:30%;height:500px;float:left;margin-left:5%;position:relative;">

		<img src="../Images/back2.jpg" style="width:70%;margin-left:45%;margin-top:5%;position:absolute;z-index:1;border:1px solid #ffffff;border-radius:20px">
		<img src="../Images/back3.jpg" style="width:50%;margin-left:18%;margin-top:30%;position:absolute;z-index:2;border:1px solid #ffffff;border-radius:20px">

	</div>
	

	<div style="width:47%;float:left;margin-left:15%;margin-top:5%">

		<div id="iconDiscriptions2">
			<img src="../Images/keys.svg" style="width:5rem;height:5rem;border:1px solid white;
	border-radius:50%;">
		</div>
	
		<h1 style="color:#ff9933">Maximize your impact</h1>

		<p style="color:black;width:50%;text-align:justify;">Create an amazing future that you love in any field from transportation to commerce and health care to government. Expand your opportunities. Exceed your expectations. Excel!!</p>
	</div>
	
</div>

<div style="width:100%;height:500px;background:linear-gradient(to bottom right, #ff9933, #ff0000);text-align:center;margin-top:1200px;background-size:100%;padding-top:100px;padding-bottom:100px">

		<h1 style="font-size:60px;color:white;margin-top:100px;">Contact Us</h1>	
		<p style="font-size:20px;color:white">If you have a question, we have an answer. If you need something,<br> we'll help you. Contact us anytime.</p>

		<br>
		<br>
		<button style="background-color:#ff0000;border:1px solid #ff0000;border-radius:5px;font-size:20px;color:white;padding:10px; ">CONTACT US NOW</button>


</div>

<div style="width:100%;height:30%;background-color:#ffffff;padding-right:50px;margin-bottom:0px;">
	<img src="../Images/Capture.png" style="width:90%;height:auto;margin-left:7%;">
	
</div>



</body>
</html>