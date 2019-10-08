<?php
function ft_is_sort($array)
{
	$origin = $array;
	sort($array);
	for ($i = 0; $i < count($array); $i++)
	{
		if ($array[$i] != $origin[$i])
		{
			return FALSE;
		}
	}
	return TRUE;
}
?>