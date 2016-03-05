<?php
	include("arrays.php");
	$errormessage = "";

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
	
	if(isset ($arrayyarncolors)){
		foreach ($arrayyarncolors as $color) {
			if($color[0] == $_GET["maincolor"]) {
				$maincolorurl = $color[1];
			}
			if($color[0] == $_GET["cc"]) {
				$ccurl = $color[1];
			}
		}
		foreach ($arrayyarncolors as $color) {
			if(isset($_POST[$color[0]])) {
				header ("location: KDstep3pattern.php?texture=".$_GET["texture"]."&maincolor=".$_GET["maincolor"]. "&cc=".$color[0]);
			}
		}
	}
?>

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
		<div style= 'font-size:32px'> Choose Contrasting Color Areas </div> 
		<hr>

		<form method='post'>
		<br>
		
		<?php

			$hidden = "hidden";

//Left Back Paw Checkbox action
			if (isset ($_POST["cclbp_hide"])) {
				$cclbp_hide = "";
			}
			else {
				$cclbp_hide = "hidden";
			}
//Right Back Paw Checkbox action
			if (isset ($_POST["ccrbp_hide"])) {
				$ccrbp_hide = "";
			}
			else {
				$ccrbp_hide = "hidden";
			}
//Left Front Paw Checkbox action
			if (isset ($_POST["cclfp_hide"])) {
				$cclfp_hide = "";
			}
			else {
				$cclfp_hide = "hidden";
			}
//Right Front Paw Checkbox action
			if (isset ($_POST["ccrfp_hide"])) {
				$ccrfp_hide = "";
			}
			else {
				$ccrfp_hide = "hidden";
			}
//StomachChin Checkbox action * Works on both :)
			if (isset ($_POST["ccstomachchin_hide"])) {
				$ccstomachchin_hide = "";
			}
			else {
				$ccstomachchin_hide = "hidden";
			}
//Tail Checkbox action
			if (isset ($_POST["cctail_hide"])) {
				$cctail_hide = "";
			}
			else {
				$cctail_hide = "hidden";
			}
//Ear Checkbox action * doesn't fully work. Cat face, yes. Cat profile, no. Why?
			if (isset ($_POST["ccears_hide"])) {
				$ccears_hide = "";
			}
			else {
				$ccears_hide = "hidden";
			}
//Muzzle Checkbox action * doesn't fully work. Cat face, yes. Cat profile, no. Why?
			if (isset ($_POST["ccmuzzle_hide"])) {
				$ccmuzzle_hide = "";
			}
			else {
				$ccmuzzle_hide = "hidden";
			}
//Face Checkbox action - needs to be linked with muzzle. So the options are a) just muzzle or b) muzzle and face but NOT c) just face
			if (isset ($_POST["ccface_hide"])) {
				$ccface_hide = "";
			}
			else {
				$ccface_hide = "hidden";
			}


// <testing area> (so i don't get the "undefined variable" error message)
		$example_hide = "";
// </testing area>


			echo "<div class='colorwindowFrame'>
					<div class='colorwindow' style='background-image: url(".$maincolorurl.")'> 
					</div>
					<div class='colorwindowLabel'> Main Color </div>
				</div>
					

				<div class='colorwindowFrame'>
					<div class='colorwindow' style='background-image: url(".$ccurl.")'>
					</div>
				<div class='colorwindowLabel'> Contrasting Color </div>
				</div>
				
				<div style='float: right; height:300px; width:300px; background-color:grey'>
					<div style='position:absolute; background-image: url(".$maincolorurl.")' id='cookiecuttercatface' class:'catpart'> </div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccLEFTear' class='".$ccears_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccRIGHTear' class='".$ccears_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccmuzzle' class='".$ccmuzzle_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccFACEface' class='".$ccface_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccFACEchin' class='".$ccstomachchin_hide." catpart'></div>
					<div style= 'background-color:#ffaa80' id= 'catnose' class='catpart'></div>
					<div style= 'background-color:black' id= 'cateyeL' class='catpart'></div>
					<div style= 'background-color:black' id= 'cateyeR' class='catpart'></div>
				</div>

				<br><br><br><br><br>

				<div style= 'float: right; height: 500px; width: 500px; background-color:grey'>
					<div style='position: absolute; background-image: url(".$maincolorurl.");' id='cookiecuttercatprofile' class='catpart'> </div>
					<div style= 'background-image: url(".$ccurl.");' id= 'cclbp' class='".$cclbp_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccrbp' class='".$ccrbp_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'cclfp' class='".$cclfp_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccrfp' class='".$ccrfp_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccstomach' class='".$ccstomachchin_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccchest' class='".$ccstomachchin_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccchin' class='".$ccstomachchin_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'cctail' class='".$cctail_hide." catpart'></div>
					<div style= 'blackground-image: url(".$ccurl.");' id= 'ccBODYears' class='".$ccears_hide." catpart'></div>
					<div style= 'blackground-image: url(".$ccurl.");' id= 'ccBODYmuzzle' class='".$ccmuzzle_hide." catpart'></div>
					<div style= 'blackground-image: url(".$ccurl.");' id= 'ccBODYface' class='".$ccface_hide." catpart'></div>
				</div>";
		?>



<div id='checkboxesForm' style='line-height: 200%'>

<div style='font-size: 36'> <b> Contrasting Color Areas </b> </div>

<u> Head </u> <br>
	<input type='checkbox' name='ccmuzzle_hide'> Muzzle
	<br>
	<input type='checkbox' name='ccface_hide'> Face
	<br>
	<input type='checkbox' name='ccears_hide'> Ears
	<br>
<u> Paws </u> <br>
	<input type='checkbox' name='cclbp_hide'> Left Back Paw
	<br>
	<input type='checkbox' name='ccrbp_hide'> Right Back Paw
	<br>
	<input type='checkbox' name='cclfp_hide'> Left Front Paw
	<br>
	<input type='checkbox' name='ccrfp_hide'> Right Front Paw
	<br>
<u> Body </u> <br>
	<input type='checkbox' name='ccstomachchin_hide'> Stomach, Chest, and Chin
	<br>
	<input type='checkbox' name='cctail_hide'> Tail
	<br>

	<input type='submit' name='previewbutton' value='Preview!'>

</div>
</form>

<form method='post' action='KDstep4previewTEST.php'>
	<input type='submit' name'continuetostep4' value= 'Continue'>
</form>
</body>
</html>