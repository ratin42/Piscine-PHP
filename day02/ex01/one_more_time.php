#!/usr/bin/php
<?php 
if ($argc < 2)
	exit(1);
if (substr_count($argv[1], " ") != 4)
{
	echo "Wrong Format" . PHP_EOL;
	exit(1);
}
$array = explode(" ", $argv[1]);
$time = explode(":", $array[4]);
$month_array = array(janvier, fevrier, mars, avril, mai, juin, juillet, aout, septembre
	, octobre, novembre, decembre);
$i = 1;
foreach ($month_array as $m)
{
	if (strcmp($m, strtolower($array[2])) == 0)
		break ;
	$i++;
}
$stamp = mktime($time[0], $time[1], $time[2], $i, $array[1], $array[3]);
echo $stamp . PHP_EOL;
?>