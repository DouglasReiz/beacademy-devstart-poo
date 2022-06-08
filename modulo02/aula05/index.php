<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'Validar.php';

$c1 = new Cliente('chiquim@email.com', '123456');
$c1 -> setNome('Chiquim');
$c1 -> setDataCadastro('10/01/2020');


$cpf = '12345678911';



validar:: validarCpf($cpf);

$c1 -> setCpf($cpf);



$g1 = new Gestor('zezim@email.com','654321',1500);
$g1 -> setNome('Zezim');

$gg1 = new GestorGeral('maria@email.com','senha', 10000 );

//$us = new usuario('hackeresperto@email.com', '222221');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
//var_dump($us);