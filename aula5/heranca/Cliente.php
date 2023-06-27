<?php

class Cliente extends Pessoa
{
    protected $codigo;

    public function setCodigo($codigo) {
        $this->codigo = (int) $codigo;
    }

    public function getCodigo() {
        return $this->codigo;
    }
}