<?php
	include("arrays.php");
	$errormessage = "";

	if(isset($_GET["cc"]) and ($_GET["cc"] == "nocc")) {
		header("location: KDstepPREVIEW.php?item=".$_GET["item"]."&texture=".$_GET["texture"]."&maincolor=".$_GET["maincolor"]);
	}

	if((isset($_GET["maincolor"])) and (isset($_GET["texture"]))) {
 		$arrayyarncolors = ${"array".$_GET["texture"]."colors"};
	}

	else {
		header("location: KDstep2cc.php");
	}
	
	if(isset ($arrayyarncolors)){
		foreach ($arrayyarncolors as $color) {
			if($color[0] == $_GET["maincolor"]) {
				$maincolorurl = $color[1];
			}
			if($color[0] == $_GET["cc"]) {
				$ccurl = $color[1];
			}

			if ($_GET["cc"] == "noc") {
				header("location: KDstepPREVIEW.php");
			}
		}

	// this next part should be something about the checkboxes being set and hitting the preview button, right? not the colors - that was from the mc and cc pages
		foreach ($arrayyarncolors as $color) {
			if(isset($_POST[$color[0]])) {
				header ("location: KDstep3pattern.php?item=".$_GET["item"]."&texture=".$_GET["texture"]."&maincolor=".$_GET["maincolor"]. "&cc=".$color[0]);
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
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:regular,bold;italic;bolditalic">
		<link rel='stylesheet' href="stylesheet.css">
	</head>

	<body>
		<div style='font-size:36px'> <b> Step 3: Coat Pattern </b> </div>
		<hr>

		<form method='post'>
		
		<?php

			$hidden = "hidden";

//Left Back Paw Checkbox action
			if (isset ($_POST["cclbp_hide"])) {
				$cclbp_hide = "";
				$cclbp_checked = "checked";
			}
			else {
				$cclbp_hide = "hidden";
				$cclbp_checked = "";
			}
//Right Back Paw Checkbox action
			if (isset ($_POST["ccrbp_hide"])) {
				$ccrbp_hide = "";
				$ccrbp_checked = "checked";
			}
			else {
				$ccrbp_hide = "hidden";
				$ccrbp_checked = "";
			}
//Left Front Paw Checkbox action
			if (isset ($_POST["cclfp_hide"])) {
				$cclfp_hide = "";
				$cclfp_checked = "checked";
			}
			else {
				$cclfp_hide = "hidden";
				$cclfp_checked = "";
			}
//Right Front Paw Checkbox action
			if (isset ($_POST["ccrfp_hide"])) {
				$ccrfp_hide = "";
				$ccrfp_checked = "checked";
			}
			else {
				$ccrfp_hide = "hidden";
				$ccrfp_checked = "";
			}
//StomachChin Checkbox action 
			if (isset ($_POST["ccstomachchin_hide"])) {
				$ccstomachchin_hide = "";
				$ccstomachchin_checked = "checked";
			}
			else {
				$ccstomachchin_hide = "hidden";
				$ccstomachchin_checked = "";
			}
//Tail Checkbox action
			if (isset ($_POST["cctail_hide"])) {
				$cctail_hide = "";
				$cctail_checked = "checked";
			}
			else {
				$cctail_hide = "hidden";
				$cctail_checked = "";
			}
//Ear Checkbox action 
			if (isset ($_POST["ccears_hide"])) {
				$ccears_hide = "";
				$ccears_checked = "checked";
			}
			else {
				$ccears_hide = "hidden";
				$ccears_checked = "";
			}
//Muzzle Checkbox action 
			if (isset ($_POST["ccmuzzle_hide"])) {
				$ccmuzzle_hide = "";
				$ccmuzzle_checked = "checked";
			}
			else {
				$ccmuzzle_hide = "hidden";
				$ccmuzzle_checked = "";
			}
//Face Checkbox action 
			if (isset ($_POST["ccface_hide"])) {
				$ccface_hide = "";
				$ccface_checked = "checked";
			}
			else {
				$ccface_hide = "hidden";
				$ccface_checked = "";
			}


// <testing area> (so i don't get the "undefined variable" error message)
		$example_hide = "";
// </testing area>


			echo "<div class='colorwindowsdiv'>
					<div class='colorwindowFrame'>
						<div class='colorwindow' style='background-image: url(".$maincolorurl.")'> 
						</div>
						<div class='colorwindowLabel'> Main Color </div>
					</div> 
						

					<div class='colorwindowFrame'>
						<div class='colorwindow' style='background-image: url(".$ccurl.")'>
						</div>
					<div class='colorwindowLabel'> Contrasting Color </div>
					</div> 
				</div>
				
				<div class='catfacediv' style='background-color:gray'>
					<div style='position:absolute; background-image: url(".$maincolorurl.")' id='cookiecuttercatface' class:'catpart'> </div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccLEFTear' class='".$ccears_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccRIGHTear' class='".$ccears_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccmuzzle' class='".$ccmuzzle_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccFACEface' class='".$ccface_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccFACEchin' class='".$ccstomachchin_hide." catpart'></div>
					<div id= 'catnose' class='catpart'></div>
					<div id= 'catnoseoutline' class='catpart'></div>
					<div id= 'cateyeLpupil' class='catpart'></div>
					<div id= 'cateyeLiris' class='catpart'></div>
					<div id= 'cateyeRpupil' class='catpart'></div>
					<div id= 'cateyeRiris' class='catpart'></div>
				</div>

				<br>
				<div class='step3spacing'> </div>

				<div class='catprofilediv'>
					<div style='position: absolute; background-image: url(".$maincolorurl.");' id='cookiecuttercatprofile' class='catpart'> </div>
					<div style= 'background-image: url(".$ccurl.");' id= 'cclbp' class='".$cclbp_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccrbp' class='".$ccrbp_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'cclfp' class='".$cclfp_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccrfp' class='".$ccrfp_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccstomach' class='".$ccstomachchin_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccchest' class='".$ccstomachchin_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccchin' class='".$ccstomachchin_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'cctail' class='".$cctail_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccBODYears' class='".$ccears_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccBODYmuzzle' class='".$ccmuzzle_hide." catpart'></div>
					<div style= 'background-image: url(".$ccurl.");' id= 'ccBODYface' class='".$ccface_hide." catpart'></div>
				</div>";
echo "

	<div id='checkboxesForm'>

		<div style='font-size: 28; font-family: Pacifico'> <b> Choose Contrasting Color Areas </b> </div>
<br>
		<div style='display:inline-block; width:30%'>
			<input type='checkbox' name='ccface_hide' ".$ccface_checked."> Nose
			<br>
			<input type='checkbox' name='ccmuzzle_hide' ".$ccmuzzle_checked."> Muzzle		
		</div>
		<div style='display:inline-block; width:30%; position: relative'>
			<div style='position:relative;top: 50%; transform: translateY(-50%)'>
			<input type='checkbox' name='ccears_hide' ".$ccears_checked."> Ears
			</div>
		</div>
		<div style='display:inline-block; width:30%'>
		<div style='position:relative;top: 50%; transform: translateY(-50%)'>
			<input type='checkbox' name='cctail_hide' ".$cctail_checked."> Tail
		</div>
		</div>
			<br><br>
		<input type='checkbox' name='ccstomachchin_hide' ".$ccstomachchin_checked."> Stomach, Chest, and Chin
			<br><br>
		<div style='display:inline-block; width:50%'>
			<input type='checkbox' name='cclfp_hide' ".$cclfp_checked."> Left Front Paw
			<br>
			<input type='checkbox' name='ccrfp_hide' ".$ccrfp_checked."> Right Front Paw
			<br>
		</div>
		<div style='display:inline-block'>
			<input type='checkbox' name='cclbp_hide' ".$cclbp_checked."> Left Back Paw
			<br>
			<input type='checkbox' name='ccrbp_hide' ".$ccrbp_checked."> Right Back Paw
		</div>
		<br><br>
		<div style='text-align:center'>
			<button class='btn btn-success' type='submit' name='previewbutton'> Preview! </button>
		</div>

	</div>"
?>
</form>
</body>
</html>