<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Ravager extends Mobile {
	public function summon() {
		$this->name = "a ravager";
		$this->body = 314;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(251, 275);
		$this->dex = rand(101, 125);
		$this->int = rand(66, 90);
		$this->maxhits = rand(161, 175);
		$this->hits = $this->maxhits;
		$this->damage = 15;
		$this->damageMax = 20;
		$this->resist_physical = rand(50, 60);
		$this->resist_fire = rand(50, 60);
		$this->resist_cold = rand(60, 70);
		$this->resist_poison = rand(30, 40);
		$this->resist_energy = rand(20, 30);
		$this->karma = -3500;
		$this->fame = 3500;
		$this->virtualarmor = 54;

}}
?>
