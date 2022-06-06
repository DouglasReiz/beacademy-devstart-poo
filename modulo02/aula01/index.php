<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$p1 = new Professor();
$p1 -> nome = 'Alessandro';
$p1 -> cpf = '123451868';
$p1 -> salario = 1000.0;
$p1 -> materia = 'PHP';

var_dump($p1);