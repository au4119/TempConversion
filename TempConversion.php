<!doctype html>
<html>
<head lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
</head>
<body>
<?php
$Fahrenheit = 0;
while ($Fahrenheit <= 100) {
	$Celsius = ($Fahrenheit - 32) * (5/9);
	echo "round($Celsius)". "degrees Celsius.<br />";
	++$Fahrenheit;
}
?>
</body>
</html>
