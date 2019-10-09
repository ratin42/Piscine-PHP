#!/usr/bin/php
<?php 

function add_note($array, &$result)
{
	if (strcmp($array[2], "moulinette") == 0)
	{
		if ($array[1] == NULL)
			$result[$array[0]]['moulinette'] = 0;
		else
			$result[$array[0]]['moulinette'] = intval($array[1]);
		return;
	}
	if (array_key_exists($array[0], $result))
	{
		$result[$array[0]]['nbr'] += 1;
		if ($array[1] == NULL)
			$result[$array[0]]['note'] += 0;
		else
			$result[$array[0]]['note'] += intval($array[1]);
	}
	else
	{
		$result[$array[0]]['nbr'] = 1;
		if ($array[1] == NULL)
			$result[$array[0]]['note'] = 0;
		else
			$result[$array[0]]['note'] = intval($array[1]);
	}
}

function get_all_mid($result)
{
	$median = 0;
	foreach ($result as $stud)
		$median += $stud['note'] / $stud[nbr];
	return ($median);
}

function get_all_user($result)
{
	foreach ($result as $stud => $value)
		echo $stud . ":" . $value['note'] / $value[nbr] . PHP_EOL;
}

function get_ecart($result)
{
	foreach ($result as $stud => $value)
	{
		$op = $value['note'] / $value['nbr'] - $value['moulinette'];
		echo $stud . ":" . $op . PHP_EOL;
	}
}

function print_result($result, $arg)
{
	if (strcmp($arg, "moyenne") == 0)
		echo get_all_mid($result) . PHP_EOL;
	if (strcmp($arg, "moyenne_user") == 0)
		get_all_user($result) . PHP_EOL;
	if (strcmp($arg, "ecart_moulinette") == 0)
		get_ecart($result) . PHP_EOL;
	else
		exit(1);
}

$result = [];
$i = 0;
while ($line = fgets(STDIN))
{
	if ($i != 0)
	{
		$array = explode(";", $line);
		$array = add_note($array, $result);
	}
	$i++;
}
ksort($result, SORT_NATURAL);
print_result($result, $argv[1]);
?>