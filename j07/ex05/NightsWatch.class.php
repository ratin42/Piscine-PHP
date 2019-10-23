<?php
include_once('IFighter.class.php');

class NightsWatch implements IFighter {
	public function fight() {
	}
	public function recruit($poor) {
		if (is_subclass_of($poor, IFighter))
			$poor::fight();
	}
}
?>