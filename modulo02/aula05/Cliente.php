<?php

declare (strict_types=1);

final class Cliente extends Usuario
{

    private string $dataCadastro;

	function getDataCadastro(): string {
		return $this->dataCadastro;
	}
	
	function setDataCadastro(string $dataCadastro): void 
    {
		$this->dataCadastro = $dataCadastro;
	}
}