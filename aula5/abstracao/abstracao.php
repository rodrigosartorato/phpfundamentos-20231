<?php

abstract class Animal {
    protected $qtdPatas = 2;
    abstract function fazerBarulho();

    public function andar() {
        return 'Estou andando...';
    }

    protected function comer() {
        return 'estou comendo..';
    }
}

class Cachorro extends Animal {
    public function fazerBarulho() {
        echo "O cachorro late: Auau! Auau!";
        echo "Falou o $this->qtdPatas patas";
    }
}

class Gato extends Animal {
    public function fazerBarulho() {
        echo "O gato mia: Miau! Miau!";
    }
}

$cachorro = new Cachorro();
echo $cachorro->andar();
echo $cachorro->fazerBarulho();


