<?php

declare(strict_types=1);

class Professor{
    private String $nome;
    private String $cpf;
    private float $salario;
    private String $materia;

    public function getNome(): String
    {
        return $this -> nome;
    }

    public function setNome(string $novoNome): void
    {
        $this-> nome = $novoNome;
    }

    public function getCPF(): String
    {
        return $this -> cpf;
    }

    public function setCPF(string $novoCPF): void
    {
        $this -> cpf = $novoCPF;
    }

    public function getSalario(): float 
    {
        return $this -> salario;
    }

    public function setSalario(float $novoSalario): void
    {
        $this -> salario = $novoSalario;
    }

    public function getMateria(): String
    {
        return $this -> materia;
    }
}