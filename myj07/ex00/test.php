<?php

class Lannister {
	public function __construct() {
		print("Alololo born !" . PHP_EOL); 
	}
	public function getSize() {
		return "wesh";
	}
	public function houseMotto() {
		return "tabitemabite";
	}
}

include('Tyrion.class.php');

$tyrion = new Tyrion();

print($tyrion->getSize() . PHP_EOL);
print($tyrion->houseMotto() . PHP_EOL);
?>
