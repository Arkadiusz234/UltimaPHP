<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Ferret extends Mobile {
	public function summon() {
		$this->name = "a ferret";
		$this->body = 0;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(41, 48);
		$this->dex = 0;
		$this->int = 0;
		$this->maxhits = rand(45, 50);
		$this->hits = $this->maxhits;
		$this->damage = 7;
		$this->damageMax = 9;
		$this->resist_physical = rand(45, 50);
		$this->resist_fire = rand(10, 14);
		$this->resist_cold = rand(30, 40);
		$this->resist_poison = rand(21, 25);
		$this->resist_energy = rand(20, 25);
		$this->karma = 0;
		$this->fame = 0;
		$this->virtualarmor = 0;

}}
?>
