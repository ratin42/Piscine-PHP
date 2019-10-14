#!/usr/bin/php
<?php 
function print_sp_array($array)
{
	foreach ($array as $string)
		echo $string . PHP_EOL;
}

function ft_split($str)
{
	$array = mb_split(" ", $str);
	foreach ($array as $string)
	{
		if ($string != "")
			$result[] = $string;
	}
	return $result;
}

function cmp_sort($a, $b) 
{
	for ($i = 0; $i )
	$pa = strpos("abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>
	?@[\]^_`{|}~", strtolower($a));
	$pb = strpos("abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>
	?@[\]^_`{|}~", strtolower($b));
	echo "pa = " . $a . " pb = " . $b . PHP_EOL;
	if ($pa > $pb)
		return 1;
	else
		return -1;
}

$array = [];
for	($i = 1; $i < $argc; $i++)
	$array = array_merge($array, ft_split($argv[$i]));
print_sp_array(($array));
echo "sorting-----------------------------" . PHP_EOL . PHP_EOL;
usort($array, "cmp_sort");
print_sp_array(($array));
?>