<html>
<head>
	<title> Kniterative Designs </title>
	<link rel='shortcut icon' href='kniterative designs logo 1000.png'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico:regular,bold;italic;bolditalic">
	<link rel='stylesheet' href="stylesheet.css">
</head>
<body>
	<div style='font-size:42px'> <b> Step 1: Texture </b> </div>
	<div style= 'font-size:28px'> Choose Your Yarn </div> 
<hr>

<form method='post'>

<?php
	include("arrays.php");

	foreach ($arrayyarntextures as $yarntexture) {
		echo "<div class='chooseKD'style= 'width: 22%; height: 50%'>
				<div class='itemlabel' style= 'font-size: 32px'> 
				<b> ".$yarntexture[0]." </b> 
			</div>
			<div class= 'buttonframe'> 
				<button class='buttonbackground'type='submit' name='".$yarntexture[2]."' value='' style='background-image: url(KDimages/".$yarntexture[1].")'>
				</button>
			</div>
			<div style='text-align:center; font-size: 20px'> ".$yarntexture[3]." </div>
		</div>";
			
		if (isset($_POST[$yarntexture[2]])) {
			header ("location: KDstep2color.php?texture=".$yarntexture[2]);
		}
	}	
?>

</form>
</body>
</html>
	






