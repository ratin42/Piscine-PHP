<?php
class House {

	public function introduce() {
		print("House " . static::getHouseName() . " of " . static::getHouseSeat() . " : ");
		print(static::getHouseMotto() . PHP_EOL);
	}
}
?>