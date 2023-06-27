<?php

class Calculadora {
    private array $operacoes = ['+', '-', '*', '/'];
    protected $operador;
    protected $num1;
    protected $num2;
    protected $resultado;

    function __construct(int $num1, int $num2, string $operacao = '+') {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operador = in_array($operacao, $this->operacoes)? 
            $operacao: 
            $this->operacoes[0];
        $this->resolverOperacao();
    }

    private function resolverOperacao() {        
        $expressao = $this->num1 . $this->operador .  $this->num2;
        try {
            $this->resultado = eval("return $expressao;");
        } catch (\Throwable $e) {
            echo PHP_EOL. "A expressão '{$expressao}' resultou no erro: " . $e->getMessage();
        }      
    }

    function getResultado() {
        return $this->resultado;
    }
}
