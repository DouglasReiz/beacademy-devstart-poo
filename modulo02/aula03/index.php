<?php 

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas','roupas Unssex');
$c2 = new Categoria('Roupas de banho', 'Toalhas pra rosto, etc');
$c3 = new Categoria('Calçados', 'Calçados em geral');



$p1 = new Produto('Tenis', 299, $c3);
/* $p1 -> setNome = ('Tenis para corrida');
$p1 -> setValor = (299); */

$p2 = new Produto('Saia Jeans', 100, $c1);
/* $p2 -> setNome = ;
$p2 -> setValor = ; */

$p3 = new Produto('Calça Branca', 159.78, $c1);

var_dump($p1);
var_dump($p2);
