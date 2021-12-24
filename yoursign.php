<?php
	include "ZodiacFinder.php"; 
	
	$result = "";
	
	//showing zodiac sign after date is given
	if(isset($_GET["yourdate"])){
		
		//conv to time
		$yourDate = strtotime($_GET["yourdate"]);
		
		//getting day and month individually
		$day = date('j', $yourDate);
		$month = date('n', $yourDate);
		
		//creating zodiac object for given form values
		$zodiac = new ZodiacFinder($day,$month);
	
		//finding zodiac sign 
		$zodiac -> zodiacFinder();
		
		//get zodiac sign with toString voodoo magic from the constellations
		$zodiac -> __toString();
		
		$result = "Your sign is <a href =\"/daily/daily".$zodiac.".php\"><strong>".$zodiac."</strong></a>";
	}
	
	
?>
<html>
	<head>
	
	</head>
	
	<body 
		bgcolor = "#0e0e0e"
		link='#FFFFFF' 
		vlink='#FFFFFF' 
		alink='#6c448c'>
	
		<div>
		<center>
		
		<!-- LOGO BANNER -->
			<table
				width = "500"
				cellpadding = "0"
				cellspacing = "0">
				
				<tr>
				
					<td>
						<a href = "homepage.php">
						<img 
						src = https://magic-spells-and-potions.com/images/magic-images/pentacles//purple-pentagram-circle.gif>
						</a>
					</td>
				
					<td
						align = "TOP">
						
						<a href = "homepage.php">
						<img 
						src = "/astrosite/astrobanner.png" 
						width = "400">
						</a>
						
					</td>
					
				</tr>
				
			</table>
		</center>
		</div>
		
		<!-- FORM -->
		<div>
		<center>
			<table
				width = "500"
				height = "350"
				background = "/astrosite/starrysky.gif">
			<tr>
				<td
					align = "CENTER"
					valign = "BOTTOM">
					
					<img
						src="/astrosite/findyoursign.png">
					<br>
					<br>
				</td>
			</tr>
			
			<tr>
				<td
					align = "CENTER"
					valign = "MIDDLE">
				
					<form 
						action = "" 
						method = "get"
						id = "form1">
						
							<input 
							type = "date" 
							name = "yourdate"
							>
							<br>
							<br>
							<button 
								type = "submit"
								form = "form1"
								value = "Submit">Submit</button>
					</form>

				</td>
			</tr>
			<!-- RESULT -->
			<tr>
				<td
					align = "CENTER"
					valign ="TOP">
				<p>
					<font 
					color = "#FFFFFF"
					size = "6">&#8192
						<?php 
							echo @$result;
						?>
					&#8192
					</font>
				</p>
				</td>
			<br>
			</table>
		</center>
		</div>
						<br>
		<!-- Back Button-->
		<div>
		<center>
			<a href = "/zodiacsigns.php">
				<img 
					src = "/astrosite/backbutton.png"
					height = "50">
			</a>
		</center>
		</div>
	</body>
	
</html>