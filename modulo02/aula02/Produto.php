<?php

declare(strict_types=1);

class Produto
{
    //atributos
    private String $nome;
    private float $valor;

    //Metido

    public function getNome(): String
    {
        return $this -> nome;
    }

    public function setNome(string $novoNome): void
    {
        $this-> nome = $novoNome;
    }

    public function getValor(): float
    {
        return $this-> valor;
    }

    public function setValor(float $novoValor): void
    {
        if($novoValor < 0){
            die('ops, Valor incorreto');
        }
        $this -> valor = $novoNome;
    }
}