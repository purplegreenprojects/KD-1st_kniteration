<?php
	include("arrays.php");
	$errormessage = "";

	if((isset($_GET["cc"])) and (isset($_GET["maincolor"])) and (isset($_GET["texture"]))) {
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
		}
		foreach ($arrayyarncolors as $color) {
			if(isset($_POST[$color[0]])) {
				header ("location: KDstepPREVIEW.php?item=".$_GET["item"]."&texture=".$_GET["texture"]."&maincolor=".$_GET["maincolor"]. "&cc=".$color[0]);
			}
		}
	}
?>

<html>
	hi
</html>




