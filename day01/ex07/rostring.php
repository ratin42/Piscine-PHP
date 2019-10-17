#!/usr/bin/php
<?php 
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

function print_sp_array($array)
{
	$i = 0;
	foreach ($array as $string)
	{
		if ($i != 0)
		{
			if ($i != 1)
				echo " ";
			echo $string;
		}
		$i++;
	}
	echo "" . PHP_EOL;
}

if ($argc < 2)
	exit(1);
$array = ft_split($argv[1]);
array_push($array, $array[0]);
print_sp_array($array);
?>