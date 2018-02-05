<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>php uebungen</title>
</head>
<body>

<?php
	$name ="Angela";
	$zahl = 1;
	/*
	while($zahl <= 50) {
		print $name;
		echo "<br>";
		$zahl = $zahl + 1;
	}

	echo "<br>";
	print "Teil 2";
	echo "<br>";

	for($i = 0; $i <= 50; $i++) {
		print $name;
		echo "<br>";
	}

	echo "<br>";
	print "Teil 3";
	echo "<br>";
	*/

	do {
		print "$name";
		echo "<br>";
		$zahl = $zahl + 1;
	}
	while($zahl <= 50);

	
?>

</body>
</html>