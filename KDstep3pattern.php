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
		<div style= 'font-size:28px'> Choose Contrasting Color Areas </div> 
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
//StomachChin Checkbox action
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

// \/ will take out once i have the real checkboxes - for now, it's there so i don't get the "undefined variable" error message
	
	$ccmuzzle_hide = "";
	$ccface_hide = "";

// (^ take out)

			echo "<div style='display:inline-block; height:250px; width:250px; background-color:grey'>
					<div style='position:absolute; background-color:white' id='cookiecuttercatface' class:'catpart'>
					</div>
				</div>

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
				</div>";
		?>

<br><br>

<div id='checkboxesForm' style='line-height: 200%'>

	<input type='checkbox' name='cclbp_hide'> Left Back Paw
	<br>
	<input type='checkbox' name='ccrbp_hide'> Right Back Paw
	<br>
	<input type='checkbox' name='cclfp_hide'> Left Front Paw
	<br>
	<input type='checkbox' name='ccrfp_hide'> Right Front Paw
	<br>
	<input type='checkbox' name='ccstomachchin_hide'> Stomach and Chin
	<br>
	<input type='checkbox' name='cctail_hide'> Tail
	<br>
	<input type='checkbox' name='ccmuzzle_hide'> Muzzle
	<br>
	<input type='checkbox' name='ccface_hide'> Face
	<br>

	<input type='submit' name='previewbutton' value='Preview!'>

</div>
</form>

<form method='post' action='KDstep4preview.php'>
	<input type='submit' name'continuetostep4' value= 'Continue'>
</form>
</body>
</html>