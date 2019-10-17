<?php
function ft_is_sort($array)
{
	$sorted = $array;
	$reverse = $array;
	sort($sorted);
	rsort($reverse);
	if ($array == $sorted)
		return TRUE;
	if ($array == $reverse)
		return TRUE;
	return FALSE;
}
?>