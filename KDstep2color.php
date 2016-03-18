<?php
	include("arrays.php");
	$errormessage = "";

	if(isset($_GET["texture"])) {
 		$arrayyarncolors = ${"array".$_GET["texture"]."colors"};
	}

	if(isset ($arrayyarncolors)){
		foreach ($arrayyarncolors as $color) {
			if(isset($_POST[$color[0]])) {
				header ("location: KDstep2cc.php?item=".$_GET["item"]."&texture=".$_GET["texture"]."&maincolor=".$color[0]);
			}
		}
	}
?>

<html>
	<head>
		<title> Kniterative Designs </title>
		<link rel='shortcut icon' href='kniterative designs logo 1000.png'>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:regular,bold;italic;bolditalic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico:regular,bold;italic;bolditalic">
		<link rel='stylesheet' href="stylesheet.css">
	</head>
	<body>
		<div style='line-height: 200%'>
			<div style='font-size:36px'>
				<b> Step 2: Color </b>
			</div>
			<div class='subheadings'> Choose <u> Main</u> Color </div>
		</div>
		<hr>

		<form method='post'>

			<?php
				if(isset ($arrayyarncolors)){
					foreach ($arrayyarncolors as $color) {
						echo "<div class='chooseKD' style= 'width: 18%; height: 30%'>
							<div class= 'buttonframe'> 
								<button class='buttonbackground' type='submit' name='".$color[0]."' value='' style='background-image: url(".$color[1].")'>
								</button>
							</div>
							<div style='text-align:center'> ".$color[2]." </div>
						</div>";
					}
				}
				else {
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
			?>

		</form>
	</body>
</html>
