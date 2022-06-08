<?php

declare(strict_types=1);

class validarUS implements Validar
{
    public function validarDocumento(string $documento): void
    {
        if(strlen($documento) !== 14){
            die('documento invalido');
        }
    }
}