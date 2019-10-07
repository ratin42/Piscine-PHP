<?php
function ft_split($str)
{
	$array = mb_split(" ", $str);
	foreach ($array as $string)
	{
		if ($string != "")
			$result[] = $string;
	}
	return $result;
}
?>
