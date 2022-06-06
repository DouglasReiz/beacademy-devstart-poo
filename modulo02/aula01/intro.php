<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a1 = new Aluno();
$a1 -> nome = 'Alessandro';
$a1 -> cpf = '123.123.123.-12';

$cursoPHP = new Curso();
$cursoPHP -> nome = 'introdução ao PHP';
$cursoPHP -> cargaHoraria = 88;
$cursoPHP -> descricao = 'Aprender o basico e intermediario do PHP';
