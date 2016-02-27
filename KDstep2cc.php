<html>
<head>
	<title> Kniterative Designs </title>
	<link rel='shortcut icon' href='kniterative designs logo 1000.png'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico:regular,bold;italic;bolditalic">
	<link rel='stylesheet' href="stylesheet.css">
</head>
<body>
	<div style='font-size:36px'>
		<b> Step 2: Color </b>
	</div>
	<div> Choose <i> Contrasting Color </i> </div>
<hr>

<form method='post'>

<br>

<?php

	include("arrays.php");


	if((isset($_GET["maincolor"])) and (isset($_GET["texture"]))) {

		if($_GET["texture"]=="pipsqueak") {
			$arrayyarncolors = $arraypipsqueakcolors;
		}
		elseif($_GET["texture"]=="homespun") {
			$arrayyarncolors = $arrayhomespuncolors;
		}
		elseif($_GET["texture"]=="caron") {
			$arrayyarncolors = $arraycaroncolors;
		}
		elseif($_GET["texture"]=="parfait") {
			$arrayyarncolors = $arrayparfaitcolors;
		}

	}
	else{
		echo "<div class='errormessage'> 
				<br> 
				<div> 404 Does Not Compute.</div>
				<div> System Error, Full Reboot. </div>
				<div> Love.program will not run. Zer- </div>
				<div> -o, Zero, One One One One One One </div>
				<br>
				<div> -James Mayr, <i> Ghost in the Drum Machine </i> (2012) </div>
		</div>";
	}

	if(isset ($arrayyarncolors)){

		foreach ($arrayyarncolors as $color) {
			if($color[0] == $_GET["maincolor"]) {
				$maincolorurl = $color[1];
			}
		}

		$arraynocc[1] = $maincolorurl;
		array_unshift($arrayyarncolors,$arraynocc);

		foreach ($arrayyarncolors as $color) {

			if($color[0] !== $_GET["maincolor"]) {
				echo "<div class='chooseKD' style= 'width: 18%; height: 30%'>
					<div class= 'buttonframe'> 
						<button class='buttonbackground' type='submit' name='".$color[0]."' value='' style='background-image: url(".$color[1].")'>
						</button>
					</div>
					<div style='text-align:center'> ".$color[2]." </div>
				</div>";	
			}
			if(isset($_POST[$color[0]])) {
				header ("location: KDstep3pattern.php?texture=".$_GET["texture"]."&maincolor=".$_GET["maincolor"]. "&cc=".$color[0]);
			}
		}
	}

?>