<?php

/**
* Ultima PHP - OpenSource Ultima Online Server written in PHP
* Version: 0.1 - Pre Alpha
*/

class Balron extends Mobile {
	public function summon() {
		$this->name = "balron";
		$this->body = 40;
		$this->type = "";
		$this->flags = 0x00;
		$this->color = 0x00;
		$this->basesoundid = 0;
		$this->str = rand(986, 1185);
		$this->dex = rand(177, 255);
		$this->int = rand(151, 250);
		$this->maxhits = rand(592, 711);
		$this->hits = $this->maxhits;
		$this->damage = 22;
		$this->damageMax = 29;
		$this->resist_physical = rand(65, 80);
		$this->resist_fire = rand(60, 80);
		$this->resist_cold = rand(50, 60);
		$this->resist_poison = 0;
		$this->resist_energy = rand(40, 50);
		$this->karma = -24000;
		$this->fame = 24000;
		$this->virtualarmor = 90;

}}
?>
