<?php

declare(strict_types=1);

class Aluno{
    private String $nome;
    private String $cpf;

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
        $this -> cpf = $novoCPF ;
    }
}