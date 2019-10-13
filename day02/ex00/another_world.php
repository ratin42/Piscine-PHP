#!/usr/bin/php
<?php 
if ($argc > 1)
{
	$string = preg_replace("/(^[\s]+)|([\s]+$)/", "", $argv[1]);
	echo (preg_replace("/[\s]+/", " ", $string)."\n");
}
?>