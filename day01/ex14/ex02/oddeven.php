#!/usr/bin/php
<?php 

function print_array($array)
{
	for ($i = 0 ; $i < count($array) - 1; $i++)
		echo $array[$i];
}

function d_quit($array)
{
	if ($array[count($array) - 1] != PHP_EOL)
	{
		echo "" . PHP_EOL;
		exit (1);
	}
}

function test_nbr($array)
{
	$nbr = $array[count($array) - 2];
	echo "Le chiffre ";
	print_array($array);
	if (intval($nbr) % 2 == 0)
		echo " est Pair" . PHP_EOL;
	else
		echo " est Impair" . PHP_EOL;
}

echo "Entrez un nombre: ";
while ($number = fgets(STDIN))
{
	$not_nbr = 0;
	if ($number === "\n")
	{
		echo "'' n'est pas un chiffre" . PHP_EOL;
		echo "Entrez un nombre: ";
		continue ;
	}
	$array = str_split($number);
	d_quit($array);
	if ($array[count($array) - 1] == NULL)
		echo "test";
	for ($i = 0 ; $i < count($array) - 1 ; $i++)
	{
		if ($i == 0 && ($array[$i] == '-' || $array[$i] == '+'))
			$i++;
		if (strstr("0123456789", $array[$i]) == FALSE && $array[$i] != NULL)
		{
			echo "'";
			print_array($array);
			echo "' n'est pas un chiffre" . PHP_EOL;
			$not_nbr = 1;
			break ;
		}
	}
	if ($not_nbr == 0)
		test_nbr($array);
	echo "Entrez un nombre: ";
}
echo "" . PHP_EOL;
?>