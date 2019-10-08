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

function get_code($a)
{
	if ()
}

function cmp($a, $b)
{
	$code = get_code($a) - get_code(b);
	if ($code == 0)
		return (strcasecmp($a, $b));
	return $code;
}

$array = [];
for	($i = 1; $i < $argc; $i++)
	$array = array_merge($array, ft_split($argv[$i]));
group_array($array);

print_r($array);
#print_sp_array(($array));
?>