<?php
	include("arrays.php");
	$errormessage = "";

	if((isset($_GET["maincolor"])) and (isset($_GET["texture"]))) {
 		$arrayyarncolors = ${"array".$_GET["texture"]."colors"};
	}

	if(isset($arrayyarncolors)){
		foreach ($arrayyarncolors as $color) {
			if($color[0] == $_GET["maincolor"]) {
				$maincolorurl = $color[1];
			}
			if($color[0] == $_GET["cc"]) {
				$ccurl = $color[1];
			}

			if("nocc" == $_GET["cc"]) {
				$ccurl = "";
			}
			// ^figured that out all by myself - woot! Makes the error messages regarding ccurl go away (when you come from stepPREVIEW and the cc=nocc)
		}
	}

	if(isset($_POST["eyesubmit"])) {
			header ("location: KDfinalform.php?item=".$_GET["item"]."&texture=".$_GET["texture"]."&maincolor=".$_GET["maincolor"]."&cc=".$_GET["cc"]."&lefteye=".$_GET["?"]."&righteye=".$_GET["?"]);
	}

?>

<html>
<head>
	<title> Kniterative Designs </title>
	<link rel='shortcut icon' href='kniterative designs logo 1000.png'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico:regular,bold;italic;bolditalic">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:regular,bold;italic;bolditalic">
	<link rel='stylesheet' href="stylesheet.css">
</head>

<body>
<form method='post'>
	<div style='line-height: 200%'>
		<div style='font-size:36px'>
			<b> Step 4: Eyes </b>
		</div>
		<div class='subheadings'> Choose Eye Color </div>
	</div>
	<hr>

<?php
$hidden = "hidden";

//StomachChin Checkbox action 
			if (isset ($_GET["ccstomachchin_hide"])) {
				$ccstomachchin_hide = "";
				$ccstomachchin_checked = "checked";
			}
			else {
				$ccstomachchin_hide = "hidden";
				$ccstomachchin_checked = "";
			}
//Ear Checkbox action 
			if (isset ($_GET["ccears_hide"])) {
				$ccears_hide = "";
				$ccears_checked = "checked";
			}
			else {
				$ccears_hide = "hidden";
				$ccears_checked = "";
			}
//Muzzle Checkbox action 
			if (isset ($_GET["ccmuzzle_hide"])) {
				$ccmuzzle_hide = "";
				$ccmuzzle_checked = "checked";
			}
			else {
				$ccmuzzle_hide = "hidden";
				$ccmuzzle_checked = "";
			}
//Face Checkbox action 
			if (isset ($_GET["ccface_hide"])) {
				$ccface_hide = "";
				$ccface_checked = "checked";
			}
			else {
				$ccface_hide = "hidden";
				$ccface_checked = "";
			}
//Left Eye Colors (Radio)
			if (isset($_GET["lefteye"])) {
				$lefteye_blue = "";
			}
			elseif (isset($_GET["lefteye"])) {
				$lefteye_green = "";
			}
			elseif (isset($_GET["lefteye"])) {
				$lefteye_yellow = "";
			}
			else {
				$lefteye_blue = "hidden";
				$lefteye_green = "hidden";
				$lefteye_yellow = "hidden";
			}
//Right Eye Colors (Radio)
			if (isset($_GET["righteye"])) {
				$righteye_blue = "";
				$righteye_blue_picked = "picked";
			}
			elseif (isset($_GET["righteye"])) {
				$righteye_green = "";
				$righteye_green_picked = "picked";
			}
			elseif (isset($_GET["righteye"])) {
				$righteye_yellow = "";
				$righteye_yellow_picked = "picked";
			}
			else {
				$righteye_blue_picked = "";
				$righteye_green_picked = "";
				$righteye_yellow_picked = "";
			}			
			

// put cc area (ex:ccears_hide) in url in order to display cc area on face

	echo "<div class='eyescatfacediv' style='background-color:gray'>
			<div style='height:500px; width: 500px; position:absolute; background-image: url(".$maincolorurl.")' id='cookiecuttercatface' class:'catpart'> </div>
			<div style= 'height:500px; width: 500px; background-image: url(".$ccurl.");' id= 'ccLEFTear' class='".$ccears_hide." catpart'></div>
			<div style= 'height:500px; width: 500px; background-image: url(".$ccurl.");' id= 'ccRIGHTear' class='".$ccears_hide." catpart'></div>
			<div style= 'height:500px; width: 500px; background-image: url(".$ccurl.");' id= 'ccmuzzle' class='".$ccmuzzle_hide." catpart'></div>
			<div style= 'height:500px; width: 500px; background-image: url(".$ccurl.");' id= 'ccFACEface' class='".$ccface_hide." catpart'></div>
			<div style= 'height:500px; width: 500px; background-image: url(".$ccurl.");' id= 'ccFACEchin' class='".$ccstomachchin_hide." catpart'></div>
			<div style='height:500px; width: 500px' id= 'catnose' class='catpart'></div>
			<div style='height:500px; width: 500px' id= 'catnoseoutline' class='catpart'></div>
			<div style='height:500px; width: 500px' id= 'cateyeLpupil' class='catpart'></div>
			<div style='height:500px; width: 500px' id= 'cateyeRpupil' class='catpart'></div>

			<div style='height:500px; width: 500px' id= 'cateyeLiris' class='catpart'></div>
			<div style='height:500px; width: 500px' id= 'cateyeRiris' class='catpart'></div>
		</div>";

echo "<div class='eyescheckboxesForm'>
		<div style='height: 50%; width: 50%; display:inline-block;'> <b> Left Eye </b> <br> 

			<input type='radio' name='lefteye' ".$lefteye_blue_picked."> Blue
			<br>
			<input type='radio' name='lefteye' ".$lefteye_green_picked."> Green
			<br>
			<input type='radio' name='lefteye' ".$lefteye_yellow_picked."> Yellow
		</div><!--
		--><div style='height:50%; width: 50%; display:inline-block'> <b> Right Eye </b> <br> 

			<input type='radio' name='righteye' ".$righteye_blue_picked."> Blue
			<br>
			<input type='radio' name='righteye' ".$righteye_green_picked."> Green
			<br>
			<input type='radio' name='righteye' ".$righteye_yellow_picked."> Yellow
		</div>
		<div style='display:block; background-color:green'>
			<input type='submit' name='eyesubmit' value='Submit'>
		</div>
	</div>"
?>
</form>
</body>
</html>
