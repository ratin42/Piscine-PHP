<?php
class Fighter {
	function __construct($UnitType) {
		static::$type = $UnitType;
	}
}
?>