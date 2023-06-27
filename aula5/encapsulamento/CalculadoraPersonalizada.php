<?php

class CalculadoraPersonalizada extends Calculadora{
    function getResultadoString() {
        $resultado = $this->getResultado();
        return "{$this->num1} {$this->operador} {$this->num2} = $resultado";
    }
}
