<?php
function ft_split($str)
{
	$result = [];
	$array = mb_split(" ", $str);
	foreach ($array as $string)
	{
		if ($string != "")
			$result[] = $string;
	}
	if ($result != NULL)
		sort($result);
	return $result;
}
?>
