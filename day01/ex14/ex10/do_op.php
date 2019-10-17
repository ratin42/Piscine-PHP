#!/usr/bin/php
<?php	

if ($argc != 4 || $argv[1] == NULL || $argv[2] == NULL || $argv[3] == NULL)
{
	echo "Incorrect Parameters" . PHP_EOL;
	exit(1);
}
$av1 = trim($argv[1], " \t");
$av2 = trim($argv[2], " \t");
$av3 = trim($argv[3], " \t");
if (is_numeric($av1) == 0 || is_numeric($av3) == 0)
	exit(1);
$a = floatval($av1);
$b = floatval($av3);
if (strstr($av2, "+"))
	$result = $a + $b;
else if (strstr($av2, "-"))
	$result = $a - $b;
else if (strstr($av2, "*"))
	$result = $a * $b;
else if (strstr($av2, "/"))
	$result = $a / $b;
else if (strstr($av2, "%"))
	$result = $a % $b;
else
	exit(1);
echo $result . PHP_EOL;
?>