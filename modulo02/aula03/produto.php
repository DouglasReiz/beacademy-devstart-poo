<?php

declare(strict_types=1);

class Produto
{
    //atributos
    private String $nome;
    private float $valor;
    private String $descricao;
    private readonly Categoria $categoria;

    public function __construct(string $novoNome, float $novoValor, Categoria $categoria)
    {
        $this -> nome = $novoNome;
        $this -> valor = $novoValor;
        $this -> categoria = $categoria;
    }

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

    public function getDescricao(): String
    {
        return $this -> descricao;
    }

    public function setDescricao(string $novoDescricao): void
    {
        $this-> descricao = $novoDescricao;
    }

    public function setCategoria(Categoria $categoria): void
    {
        $this -> categoria = $Categoria;
    }
}