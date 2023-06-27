<?php

class Animal {
    public function fazerBarulho() {
        echo "O animal faz algum barulho.";
    }
}

class Cachorro extends Animal {
    public function fazerBarulho() {
        parent::fazerBarulho();
        echo "O cachorro late: Woof! Woof!";
    }
}

class Gato extends Animal {
    public function fazerBarulho() {
        echo "O gato mia: Meow! Meow!";
    }
}

// Criação de objetos
$animal = new Animal();
$cachorro = new Cachorro();
$gato = new Gato();

// Chamada dos métodos
$animal->fazerBarulho(); // Saída: O animal faz algum barulho.
$cachorro->fazerBarulho(); // Saída: O cachorro late: Woof! Woof!
$gato->fazerBarulho(); // Saída: O gato mia: Meow! Meow!
