<?php 
function check_pass($array, $login)
{
	$i = 0;
	foreach($array as $session)
	{
		if ($session['login'] == $login)
		{
			if ($session['passwd'] != $_POST['oldpw'])
			{
				echo "origin pass = " . $session['passwd'] . "old = " . $_POST['oldpw'];
				break ;

			}
			return true;
		}
		$i++;
	}
	echo "ERROR\n";
	exit(1);
}

if ($_POST['submit'] != "OK" || $_POST['newpw'] == NULL)
{
	echo "ERROR\n";
	exit(1);
}
else
{
	if (file_exists("../private/passwd") == true)
	{
		$pass_file = unserialize(file_get_contents("../private/passwd"));
		$i = check_pass($pass_file, $_POST['login']);
		$_POST['newpw'] = hash('whirlpool', $_POST['newpw']);
		$pass_file[$i]['passwd'] = $_POST['newpw'];
		$pass_file = serialize($pass_file);
		file_put_contents("../private/passwd", $pass_file);
	}
	else
	{
		echo "ERROR\n";
		exit(1);
	}
	echo "OK\n";
}
?>