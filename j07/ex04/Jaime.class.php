<?php
class Jaime extends Lannister {
	public function sleepWith($person)
	{
		$name = get_class($person);
		if ($name == "Cersei")
			print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		else if ($name == "Sansa")
			print("Let's do this." . PHP_EOL);
		else
			print("Not even if I'm drunk !" . PHP_EOL);
	}
}
?>