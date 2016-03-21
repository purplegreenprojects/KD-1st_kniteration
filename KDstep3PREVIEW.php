<?php
	include("arrays.php");
	$errormessage = "";

	if((isset($_GET["maincolor"])) and (isset($_GET["texture"]))) {
 		$arrayyarncolors = ${"array".$_GET["texture"]."colors"};
	}	

	if(isset ($arrayyarncolors)){
		foreach ($arrayyarncolors as $color) {
			if($color[0] == $_GET["maincolor"]) {
				$maincolorurl = $color[1];
			}
		}
		foreach ($arrayyarncolors as $color) {
			if(isset($_POST[$color[0]])) {
				header ("location: KDstepPREVIEW.php?item=".$_GET["item"]."&texture=".$_GET["texture"]."&maincolor=".$_GET["maincolor"]);
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
Your Cat So Far...
<?php
echo "<div class='catfacediv' style='float:left; display:inline-block'>
		<div style='position:absolute; background-image: url(".$maincolorurl.")' id='cookiecuttercatface' class:'catpart'> </div>
	<div class='catprofilediv' style='float:right; display:inline-block'>
					<div style='position: absolute; background-image: url(".$maincolorurl.");' id='cookiecuttercatprofile' class='catpart'> </div>"

?>
</body>
</html>




