#!/usr/bin/php
<?php 

$page = file_get_contents("page.html");
echo "text = " .  $page . PHP_EOL;
//$link = preg_split('@(?<=<a)@', $page);
//$link = preg_split('/<\s*a[^>]*>(.*?)<\s*\/\s*a>/', $page, PREG_SPLIT_DELIM_CAPTURE);
//print_r($link);
$line = preg_replace_callback(
	'/<\s*a[^>]*>(.*?)<\s*\/\s*a>/',
	function ($matches) {
		return strtolower($matches[0]);
	},
	$line);

echo "line = |" . $line . PHP_EOL;
$array = [];
preg_match_all('/<\s*a[^>]*>(.*?)<\s*\/\s*a>/', $page, $array);
(?<=title=")(.*)(?=")
(?<=is \>)(.*?)(?=\s*\<)
print_r($array);

echo "-----------------------------------" . PHP_EOL . PHP_EOL;
 
#foreach ($link as $string)
#{
#	$array = str_split($string);
#	echo "string = *|" . $string . "|*" . PHP_EOL;
#	foreach ($array as $char)
#	{
#	}
#	array_push($result, $array);
#}
?>