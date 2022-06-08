<?php

declare(strict_types=1);

class GestorGeral extends Gestor
{
    private float $bonusAnual;
    
	/**
	 * @return float
	 */
	function getBonusAnual(): float {
		return $this->bonusAnual;
	}
	

	function setBonusAnual(float $bonusAnual): void {
		$this->bonusAnual = $bonusAnual;
	}
}