<?php

namespace TreinamentoPHP\Exemplos\Paradigmas\OO;

// Código Orientado a Objetos

class Retangulo {
    public function __construct(private $largura, private $altura) { }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}
