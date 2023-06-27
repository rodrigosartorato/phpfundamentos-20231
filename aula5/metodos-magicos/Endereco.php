<?php

class Endereco {
    
    public string $logradouro;
    public string|null $numero;
    public string|null $complemento;
    public string $cep;

    public function __construct() {
        echo PHP_EOL . 'Construtor da classe Endereco - método mágico __construct()' . PHP_EOL;
    }

    public function __destruct() {
        echo PHP_EOL . "Destrutor da classe Endereco - método mágico __destruct()" . PHP_EOL;
    }

    public function getEnderecoCompleto(): string {
        return PHP_EOL . "Endereço: {$this->logradouro}, {$this->numero}, {$this->complemento} - CEP: {$this->cep}";
    }

}