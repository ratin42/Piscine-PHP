<?php 
function login_is_uni($array, $login)
{
	foreach($array as $session)
	{
		if ($session['login'] == $login)
			return false;
	}
	return true;
}

if ($_POST['submit'] != "OK" || $_POST['passwd'] == NULL)
{
	echo "ERROR\n";
	exit(1);
}
else
{
	$_POST['passwd'] = hash('whirlpool', $_POST['passwd']);
	if (file_exists("../private/passwd") == true)
	{
		$pass_file = unserialize(file_get_contents("../private/passwd"));
		if (login_is_uni($pass_file, $_POST['login']) == false)
		{
			echo "ERROR\n";
			exit(1);
		}
		$pass_file[] = ['login' => $_POST['login'], 'passwd' => $_POST['passwd']];
		$pass_file = serialize($pass_file);
		file_put_contents("../private/passwd", $pass_file);
	}
	else
	{
		$pass_file = [];
		$pass_file[] = ['login' => $_POST['login'], 'passwd' => $_POST['passwd']];
		if (file_exists("../private") == false)
			mkdir("../private", 0755);
		$pass_file = serialize($pass_file);
		file_put_contents("../private/passwd", $pass_file);
	}
	echo "OK\n";
}
?>