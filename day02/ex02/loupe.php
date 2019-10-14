#!/usr/bin/php
<?php 

$page = file_get_contents("page.html");
echo "text = " .  $page . PHP_EOL;
//$link = preg_split('@(?<=<a)@', $page);
//$link = preg_split('/<\s*a[^>]*>(.*?)<\s*\/\s*a>/', $page, PREG_SPLIT_DELIM_CAPTURE);
//print_r($link);
$array = [];
preg_match_all('/<\s*a[^>]*>(.*?)<\s*\/\s*a>/', $page, $array);
//echo "array = |" . $array[0][0] . PHP_EOL;

for ($i = 0; $i < count($array[0]); $i++)
{
	echo "test" . $array[0][$i] . "|" . PHP_EOL;
	$array[0][$i] = preg_replace_callback(
		'/(?<=title=")(.*)(?=")/',
		function($matches) {
			echo "test |" . $matches[0] . "|" . PHP_EOL;
			return strtoupper($matches[0]);
		},
		$array[0][i]
	);
}

print_r($array);
//preg_replace('/(?<=title=")(.*)(?=")/', "tets", $array[0][0]);

#(?<=title=")(.*)(?=")
#(?<=is \>)(.*?)(?=\s*\<)

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