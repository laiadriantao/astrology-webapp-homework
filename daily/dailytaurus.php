<?php

//initialize curl
$curlHandle=curl_init();

//value of zodiac.

$zodiacValue = "2"; 

//site link var 
$siteLink = "https://www.horoscope.com/us/horoscopes/general/horoscope-general-daily-tomorrow.aspx?sign=".$zodiacValue;

//curl setup
curl_setopt($curlHandle,CURLOPT_URL,$siteLink);
curl_setopt($curlHandle,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curlHandle,CURLOPT_HEADER,false);
	
//grab and pass curl
$html = curl_exec($curlHandle);

$dom = new DOMDocument();

//loading html and skipping errors
@ $dom -> loadHTML($html);

//getting the paragraphs from dom
$ps = $dom -> getElementsByTagName('p');

//here we will store all the paragraphs we will get from the site
$pArray = array();

/* attempt to take the first p tag element individually 
$zodiacText = $p -> textContent;
$pArray[] = $zodiacText;
echo $pArray[0];
*/

/*
iterating through domnodelist because for 
some reason there is no way to individually 
take the p tag by itself */

foreach($ps as $p) {
	//getting textContent from <p> tag
	$zodiacText = $p -> textContent;
	//adding in array
	$pArray[] = $zodiacText;
}


//close curl
curl_close($curlHandle);

?>
<html>
	<head>
	
	</head>
	
	<body
		bgcolor = "#0e0e0e">
		<!-- DAILY HOROSCOPE-->
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
						<a href = "/homepage.php">
						<img 
						src = https://magic-spells-and-potions.com/images/magic-images/pentacles//purple-pentagram-circle.gif>
						</a>
					</td>
					
					<td
						align = "TOP"
						valign = "CENTER">
						<a href = "/homepage.php">
						<img 
						src = "/astrosite/astrobanner.png" 
						width = "400">
						</a>
					</td>
					
				</tr>
				
			</table>
		</center>
		</div>
				<!-- Your future forecast -->
		<div>
		<center>
			<table
				width = "500">
				<tr>
				<img 
					src = "/astrosite/yourfutureforecast.png">
				</tr>
			</table>
						<img
				src = "/astrosite/taurusLogo.gif"
				width = "200">
		</center>
		</div>
		
		<div>
			<center>
			<table
				width = "500"
				cellpadding = "0"
				cellspacing = "0"
				border = "0">
				<tr>
				
					<td>
						<font
							color = "#FFFFFF"
							size = "5">
						<center>
						<p>
						<?php
							echo $pArray[0];
						?>
						</p>
						</center>
						</font>
					</td>
				
					
				</tr>
				
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