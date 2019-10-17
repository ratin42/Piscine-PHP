<?php 
if (strcmp("set", $_GET['action']) == 0)
{
	setcookie($_GET['name'], $_GET['value']);
}
else if (strcmp("get", $_GET['action']) == 0)
	echo $_COOKIE[$_GET['name']] . PHP_EOL;
else if (strcmp("del", $_GET['action']) == 0)
	setcookie($_GET['name'], "", time() - 3600);
?>