<html>
<head>
	<title> Kniterative Designs </title>
	<link rel='shortcut icon' href='kniterative designs logo 1000.png'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pacifico:regular,bold;italic;bolditalic">
	<link rel='stylesheet' href='stylesheet.css'>
</head>
<body>
<br>
	<div style='font-size:36px'>
		<b> Choose the Kniterative Design You Want </b>
	</div>
<hr>
<br> 
<form method='post'>

<?php
	include("arrays.php");

	foreach ($arrayitemlisting as $itemlisting) {
		echo "<div class='chooseKD'>
			<div class='buttonframe'>
				<button class='buttonbackground'type='submit' name='".$itemlisting."' value='' style='background-image: url(KDimages/".$itemlisting.".JPG)'>
				</button>
			</div>
			<div style='text-align:center'> ".$itemlisting." 
			</div>
		</div>";
		if (isset($_POST[$itemlisting])) {
			header ("location: KDstep1texture.php");
		}	
	}

?>

</form>
</body>
