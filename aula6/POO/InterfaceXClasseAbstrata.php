<?php

namespace TreinamentoPHP\Exemplos\Abstracao;

interface IAnimal {
    public function fazerBarulho();
}

abstract class Animal {
    public string $apelido;
    public int $idade;

    public function __construct(string $apelido = 'Lessy', int $idade = 0) { 
        $this->apelido = $apelido;
        $this->idade = $idade;
    }

    abstract public function caminhar();

    public function comer() {
        return "$this->apelido está comendo...";
    }
}

abstract class AnimalPHP8 {
    public function __construct(public string $apelido = 'Lessy', public int $idade = 0) {  }
    abstract public function caminhar();
}

class Cachorro extends Animal implements IAnimal {
    public function fazerBarulho() {
        return 'Au, au';
    }
    public function caminhar() {
        return 'Caminhando...';
    }
}

class Gato implements IAnimal {
    public function fazerBarulho() {
        return 'Miau';
    }
}

$cachorro = new Cachorro(idade: 2, apelido: 'Rex');
echo PHP_EOL . $cachorro->apelido;
echo PHP_EOL . $cachorro->fazerBarulho();
echo PHP_EOL . $cachorro->comer();
$cachorro->idade = 4;

$gato = new Gato();
echo PHP_EOL . $gato->fazerBarulho();
