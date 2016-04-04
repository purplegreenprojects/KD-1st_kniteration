<!DOCTYPE html>
<html>
<head>
	<title>Clip-path Coordinates Calculator</title>
</head>
<body>

	<div style='text-align:center; font-size:42px'> Clip-path Calculator </div>
	<hr>

	<form method="post" action="clippathcalculator.php">
		Coordinates <input type='text' name='string' style='width: 200px; height:100px'></input>
		<br><br>
		X <input type='text' name='x'></input>
		<br><br>
		Y <input type='text' name='y'></input>
		<br><br>
		<button name='math!'>Submit</button>

	</form>

<?php

if (isset($_POST['math!'])) {
	$x = ($_POST['x']);
	$y = ($_POST['y']);
	$string = ($_POST['string']);


//turn the string into an array of points
$pointsArray = explode(", " , $string);

//create an empty array for the results
$resultArray = array();

//for each of the points, we're going to split it into an x and a y value
foreach ($pointsArray as $point) {
$coordinatesArray = explode(" " , $point);

//for the x and y, we're going to remove the %, then add the input value from above, then put the % back
$coordinatesArray[0] = (str_replace("%","",$coordinatesArray[0]) + $x) . "%";
$coordinatesArray[1] = (str_replace("%","",$coordinatesArray[1]) + $y) . "%";

//next, we put the x and y back into a string with a space in between
$coordinate = implode(" " , $coordinatesArray);

//and finally, we add that coordinate to the result array 
array_push($resultArray, $coordinate);
}

//and finally, turn that result array back into a comma-separated string to print it
$result = implode(", " , $resultArray);
echo $result;

}

else {
	echo "Please enter numbers";
}

?>

</body>
</html>