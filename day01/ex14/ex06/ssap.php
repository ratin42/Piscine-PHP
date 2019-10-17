#!/usr/bin/php
<?php 
function print_sp_array($array)
{
	foreach ($array as $string)
		echo $string . PHP_EOL;
}

function ft_split($str)
{
	$result = [];
	$array = mb_split(" ", $str);
	foreach ($array as $string)
	{
		if ($string != "")
			$result[] = $string;
	}
	return $result;
}

$array = [];
for	($i = 1; $i < $argc; $i++)
	$array = array_merge($array, ft_split($argv[$i]));
sort($array);
print_sp_array(($array));
?>