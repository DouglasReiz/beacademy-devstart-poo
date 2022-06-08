<?php

declare(strict_types=1);

class validarBR implements Validar
{
    public function validarDocumento(string $documento): void
    {
        if(strlen($documento) !== 11){
            die('CPF invalido');
        }
    }
}