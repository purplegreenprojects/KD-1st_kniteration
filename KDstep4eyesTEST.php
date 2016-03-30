<?php
	include("arrays.php");
	$errormessage = "";

	if(isset($_GET["cc"]) and ($_GET["cc"] == "nocc")) {
		header("location: KDstepPREVIEW.php?item=".$_GET["item"]."&texture=".$_GET["texture"]."&maincolor=".$_GET["maincolor"]);
	}

	if((isset($_GET["maincolor"])) and (isset($_GET["texture"]))) {
 		$arrayyarncolors = ${"array".$_GET["texture"]."colors"};
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
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico:regular,bold;italic;bolditalic">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:regular,bold;italic;bolditalic">
	<link rel='stylesheet' href="stylesheet.css">
</head>

<body>
	<div style='line-height: 200%'>
		<div style='font-size:36px'>
			<b> Step 4: Eyes </b>
		</div>
		<div class='subheadings'> <u> Choose Eye Color</u> </div>
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
?>




<div class='eyescheckboxesForm' style='background-color:pink; padding:0px; border:0px; margin:0px'>

	<div style='height: 100%; width: 40%; display:inline-block; background-color:blue; padding:0px; border:0px;margin:0px'> <b> Left Eye </b> </div>
	<div style='height:100%; width: 40%; display:inline-block; background-color:red; padding:0px; border:0px;margin:0px'> <b> Right Eye </b> </div>
</div>



</body>
</html>