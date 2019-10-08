#!/usr/bin/php
<?php 

function get_user($line)
{
	return (substr($line, 0, strpos($line, ";")));
}

while ($line = fgets(STDIN))
{
	echo get_user($line) . "|" . PHP_EOL;
	echo $line;
}
?>