<?php

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';


$cpf='12345678901';
$docX='12345678901234';

$br = new ValidarBR();
$br -> validarDocumento($cpf);

$us= new validarUS();
$us -> validarDocumento($docX);



echo "<h1>funcionou</h1>";