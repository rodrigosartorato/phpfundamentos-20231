<?php

class Carro {
    public string $marca;
    public string $modelo;
    protected int $ano;

    public function ligar() {
        echo 'O carro foi ligado...';
    }

    public function acelerar() {
        echo 'O carro está acelerando...';
    }

    public function info() {
        echo "Carro {$this->marca} {$this->modelo}, ano {$this->ano}";
    }
}


// Instanciando objeto da classe Carro
$carro1 = new Carro();

// Difinindo propriedades (atributos)
$carro1->marca = 'Ford';
$carro1->modelo = 'KA';
// $carro1->ano = 2002; // Uma propriedade protegida não pode ser acessa pela instancia

// Chamando métodos (comportamento)
$carro1->acelerar();
$carro1->info();
