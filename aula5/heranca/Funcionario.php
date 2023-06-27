<?php

class Funcionario extends Pessoa {
    protected $cargo;
    protected $salario;

    public function setCargo($cargo) {
        $this->cargo = ucfirst($cargo);
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getNome() {

        return parent::getNome() . "Sr(a). {$this->nome}";
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getSalario() {
        return number_format($this->salario, 2, ',', '.');
    }
}