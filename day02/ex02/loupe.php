#!/usr/bin/php
<?php 

$page = file_get_contents("page.html");
echo "text = " .  $page . PHP_EOL;
$link = preg_split('@(?<=<a)@', $page);

$flag = 0;
$result = [];
echo "-----------------------------------" . PHP_EOL . PHP_EOL;
foreach ($link as $string)
{
	var_dump($string);
	$array = str_split($string);
	foreach ($array as $char)
	{
		if ($char == '>' || flag == 1)
		{
			$flag = 1;
			$char = strtoupper($char);
			if ($char == '<')
				break ;
		}
	}
	array_push($result, $array);
}
$final = implode($result);
//print_r($result);
echo $result . PHP_EOL;
?>