<?php
	include("arrays.php");
	$errormessage = "";

	if((isset($_GET["cc"])) and (isset($_GET["maincolor"])) and (isset($_GET["texture"]))) {
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
			if(isset($_POST["previewsubmit"])) {
				header ("location: KDstep4eyes.php?item=".$_GET["item"]."&texture=".$_GET["texture"]."&maincolor=".$_GET["maincolor"]."&cc=nocc");
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
<form method="post">

Your Cat So Far...

	<div style='display:block; background-color:green'>
		<!--<input type='submit' name='previewsubmit' value='Submit'>-->
		<button type='submit' name='previewsubmit'>Submit</button>
	</div>

<?php
echo "<div class='catfacediv' style='float:left; display:inline-block'>
		<div style='position:absolute; background-image: url(".$maincolorurl.")' id='cookiecuttercatface' class:'catpart'> </div>
	<div class='catprofilediv' style='float:right; display:inline-block'>
					<div style='position: absolute; background-image: url(".$maincolorurl.");' id='cookiecuttercatprofile' class='catpart'> </div"

?>

</form>
</body>
</html>




