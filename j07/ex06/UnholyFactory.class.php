<?php
class UnholyFactory {
	function __construct() {
		$this->$absorbed_fighter = Array(
		);
	}

	function __destruct() {
	}

	public function absorb($fighter) {
		var_dump($fighter->type);
		$type = get_class($fighter);
		if (get_parent_class($fighter) == "Fighter")
		{
			if (in_array($type, $this->$absorbed_fighter) == True)
				print("(Factory already absorbed a fighter of type ". $type . ")" . PHP_EOL);
			else {
				array_push($this->$absorbed_fighter, $type);
				print("(Factory absorbed a fighter of type " . $type . ")" . PHP_EOL);
			}
		}
		else
			print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
	}

	public function fabricate($name) {
		print_r($this->$absorbed_fighter);
		if (in_array($name, $this->$absorbed_fighter) == True) {
			print("(Factory fabricates a fighter of type " . $name . ")" . PHP_EOL);
			return ($name);
		}
		else {
			
			print("(Factory hasn't absorbed any fighter of type " . $name . ")" . PHP_EOL);
		}
	}
}

?>