<?php
session_start();
include ("dbconfig.php");
include ("functions.php");
include ("ZodiacFinder.php");

//checking login and getting all data about the logged in user from the database
$user_data = check_login($con);

//getting user birthday from user_data
$birthdate = strtotime($user_data['birthdate']);

//getting day and month individually
$day = date('j', $birthdate);
$month = date('n', $birthdate);

//creating zodiac object for given form values
$zodiac = new ZodiacFinder($day,$month);

//finding zodiac sign
$zodiac -> zodiacFinder();

//get zodiac sign with toString voodoo magic from the constellations
$zodiac -> __toString();

//result of zodiac
$zodiacResult = "Your sign is <a href =\"/daily/daily".$zodiac.".php\"><strong>".$zodiac."</strong></a>";


?>
<html>
	<head>
		<title> AstroWeb | <?php echo $user_data['firstname']; ?> </title>
	</head>

	<body
		bgcolor = #0e0e0e>

		<!-- HOMEPAGE DIV -->
		<div>
		<center>

		<!-- LOGO BANNER -->
		<table
			width = "500"
			cellpadding = "0"
			cellspacing = "0"
			border = "0">
			<tr>
				<td>
					<a href = "homepage.php">
					<img
					src = https://magic-spells-and-potions.com/images/magic-images/pentacles//purple-pentagram-circle.gif>
					</a>
				</td>
				<td
					align = "TOP"
					valign = "CENTER">
					<a href = "homepage.php">
					<img
					src = "/astrosite/astrobanner.png"
					width = "400"
					></a>
				</td>

			<tr>
		</table>

		<table
			width = "500"
			cellpadding = "0"
			cellspacing = "0"
			border = "0">
			<tr>
				<td>
					<font color = "#FFFFFF">
					<center><h1>Your personal page</h1>
					<p> Hello <?php echo $user_data['firstname']; ?> <?php echo $user_data['lastname']; ?></p>
					<p> You were born on: <?php echo $user_data['birthdate'];?></p>
					<p> <?php echo $zodiacResult;?>, click your sign to read your future prediction! </p>
					<button>
					<a href ="logout.php">Logout </a>
					</button>
					</font>
				</center>
				</td>
			<tr>
		</table>
		</center>
		</div>
	</font>
	</table>
	</center>
	</body>

</html>
