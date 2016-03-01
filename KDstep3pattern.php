<html>
<head>
	<title> Kniterative Designs </title>
	<link rel='shortcut icon' href='kniterative designs logo 1000.png'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico:regular,bold;italic;bolditalic">
	<link rel='stylesheet' href="stylesheet.css">
</head>

<body>
	<div style='font-size:42px'> <b> Step 3: Coat Pattern </b> </div>
	<div style= 'font-size:28px'> Choose Contrasting Color Areas </div> 
<hr>


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
		elseif($_GET["texture"]=="comfy") {
		$arrayyarncolors = $arraycomfycolors;
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
			if($color[0] == $_GET["cc"]) {
				$ccurl = $color[1];
			}
		}
	}


	$hidden = "hidden";

// \/ will take out once i have the real checkboxes - for now, it's there so i don't get the "undefined variable" error message
	$cclbp_hide = "";
	$ccrbp_hide = "";
	$cclfp_hide = "";
	$ccrfp_hide = "";
	$ccstomachchin_hide = "";
	$cctail_hide = "";
// (^ take out)

	echo "<div style= 'float: right; height: 500px; width: 500px; background-color:grey'>
			<div style='position: absolute; background-image: url(".$maincolorurl.");' id='cookiecuttercatprofile' class='catpart'> </div>
			<div style= 'background-image: url(".$ccurl.");' id= 'cclbp' class='".$cclbp_hide." catpart'></div>
			<div style= 'background-image: url(".$ccurl.");' id= 'ccrbp' class='".$ccrbp_hide." catpart'></div>
			<div style= 'background-image: url(".$ccurl.");' id= 'cclfp' class='".$cclfp_hide." catpart'></div>
			<div style= 'background-image: url(".$ccurl.");' id= 'ccrfp' class='".$ccrfp_hide." catpart'></div>
			<div style= 'background-image: url(".$ccurl.");' id= 'ccstomach' class='".$ccstomachchin_hide." catpart'></div>
			<div style= 'background-image: url(".$ccurl.");' id= 'ccchest' class='".$ccstomachchin_hide." catpart'></div>
			<div style= 'background-image: url(".$ccurl.");' id= 'ccchin' class='".$ccstomachchin_hide." catpart'></div>
			<div style= 'background-image: url(".$ccurl.");' id= 'cctail' class='".$cctail_hide." catpart'></div>
		</div>";
?>

<div style='width:50%; height: 100%; text-align:center'>
	<input type='checkbox' name='cclbp'> Left Back Paw
	<br><br>
	<input type='checkbox' name='ccrbp'> Right Back Paw
	<br><br>
	<input type='checkbox' name='cclfp'> Left Front Paw
	<br><br>
	<input type='checkbox' name='ccrfp'> Right Front Paw
	<br><br>
	<input type='checkbox' name='ccstomachchin'> Stomach and Chin
	<br><br>
	<input type='checkbox' name='cctail'> Tail
	<br><br>
	<input type='checkbox' name='ccmuzzle'> Muzzle
	<br><br>
	<input type='checkbox' name='ccface'> Face
</div>


</body>
</html>