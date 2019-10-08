#!/usr/bin/php
<?php	

if ($argc != 4)
{
	echo "Incorrect Parameters" . PHP_EOL;
	exit(1);
}
$a = intval($argv[1]);
$b = intval($argv[3]);
if (strstr($argv[2], "+"))
	$result = $a + $b;
else if (strstr($argv[2], "-"))
	$result = $a - $b;
else if (strstr($argv[2], "*"))
	$result = $a * $b;
else if (strstr($argv[2], "/"))
	$result = $a / $b;
else if (strstr($argv[2], "%"))
	$result = $a % $b;
echo $result . PHP_EOL;
?>