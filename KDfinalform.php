<?php

	if(isset($_POST["submit"])) {
		if(isset($_POST["email"]) and ($_POST["email"] !== "")) {
			$email = $_POST["email"];
			if(isset($_GET["item"]) and isset($_GET["texture"]) and isset($_GET["maincolor"]) and isset($_GET["cc"])) {
				if(($_GET["item"] == "Cat") or ($_GET["item"] == "Bunny")) {
					if(!isset($_GET["eyecolor"])) {
						echo "You want a cat without eyes??";
					}
				}

				$message = "";

				foreach($_GET as $key => $placeholder) {
					$message = $message.$key." is ".$placeholder."<br>";
				}

				//mail($email, $subject, $message);
				mail($email, "Your Kniterative Designs Order", "Your ".$_GET["item"]. ": <br>" .$message);
				mail("kniterativedesigns@gmail.com", "New Order!", $message);
				// then redirect (header:location...)

			}
			else{
				echo "Stop. Go back. Pick the things.";
			}
		}
		else {
			echo "You're an idiot. I need your email. else {no cat}";
		}
	}
?>


<!DOCTYPE html>
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
			<b> Step 1,000 </b>
		</div>
		<div class='subheadings'> Give Me <span style='font-family:times'>ALL</span> the information </div>
	</div>
	<hr>

	<form method='post' style='padding:10px'>
		<input style='font-family: Roboto Condensed' type='email' name='email' placeholder='Enter Your Email' class='form-control'>
		<button class='btn btn-success btn-xl' name='submit' type='submit'>Knit!</button>
	</form>

<?php
	//For now, because xampp can't send actual emails
				echo "Your ".$_GET["item"]. ": <br>" .$message;
?>
</body>
</html>