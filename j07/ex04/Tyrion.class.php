<?php
class Tyrion extends Lannister {
	public function sleepWith($person)
	{
		$name = get_parent_class($person);
		if ($name == "Lannister")
			print("Not even if I'm drunk !" . PHP_EOL);
		else
			print("Let's do this." . PHP_EOL);
	}
}
?>