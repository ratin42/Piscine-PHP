#!/usr/bin/php
<?php
if ($argc != 2)
{
	echo "Incorrect Parameters" . PHP_EOL;
	exit(1);
}
$array = str_split(($argv[1]));
foreach ($array as $char)
{
	if (strstr(" +-*/%1234567890", $char) == false)
	{
		echo "Syntax Error" . PHP_EOL;
		exit(1);
	}
}

$i = 0;
$flag = 0;
while ($array[$i])
{
	if ($array[$i] != " " && is_numeric($array[$i]) && $flag == 0)
	{
		$flag = 1;
		$a = intval(substr($argv[1], $i));
		if ($i != 0 && $array[$i - 1] == '-')
			$a = $a * -1;
	}
	if (strstr("+-*/%", $array[$i]) && $flag == 1)
	{
		$op = substr($argv[1], $i);
		if (is_numeric($argv[1][$i + 1]) == false && $argv[1][$i + 1] != '+'
			&& $argv[1][$i + 1] != '-')
		{
			echo "Syntax Error" . PHP_EOL;
			exit(1);
		}
		$b = intval(substr($argv[1], $i + 1));
		break ;
	}
	$i++;
}
if (strstr($op, "+"))
	$result = $a + $b;
else if (strstr($op, "-"))
	$result = $a - $b;
else if (strstr($op, "*"))
	$result = $a * $b;
else if (strstr($op, "/"))
	$result = $a / $b;
else if (strstr($op, "%"))
	$result = $a % $b;
echo $result . PHP_EOL;
?>