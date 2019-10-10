#!/usr/bin/php
<?php 
function ft_split($str)
{
	$array = mb_split("\t", $str);
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
			echo " ";
		echo $string;
		$i++;
	}
	echo "" . PHP_EOL;
}

$array = ft_split($argv[1]);
print_sp_array($array);
?>