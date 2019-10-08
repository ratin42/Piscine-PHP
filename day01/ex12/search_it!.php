<?php
function get_key($string)
{
	$pos = strpos($string, ":");
	return (substr($string, 0, $pos));
}

function print_kvalue($string)
{
	$pos = strpos($string, ":");
	echo substr($string, $pos + 1) . PHP_EOL;
}

if ($argc < 3)
	exit(1);
$key = $argv[1];
$result = -1;
for ($i = 2; $i < $argc; $i++)
{
	if (strcmp($key, get_key($argv[$i])) == 0)
		$result = $i;
}
if ($result != -1)
	print_kvalue($argv[$result]);
?>