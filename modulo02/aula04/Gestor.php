<?php

declare (strict_types=1);

class Gestor extends Usuario
{

    private float $salario;
    private string $horario;

	function getSalario(): float {
		return $this->salario;
	}
	

	function setSalario(float $salario): void {
		$this->salario = $salario;

	}

	function getHorario(): string {
		return $this->horario;
	}
	

	function setHorario(string $horario): void {
		$this->horario = $horario;
	}

    
    public function __construct(string $email, string $senha, float $salario)
    {
        parent:: setEmail($email);
        parent:: setSenha($senha);
        $this->salario = $salario;
    }
}