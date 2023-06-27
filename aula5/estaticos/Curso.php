<?php

class Curso {
    protected $nome;
    protected static $qtd = 0;

    public function __construct(string $nome)    {
        $this->nome = $nome;
        self::$qtd++;
    }

    static public function qtdInstancias() {
        return self::$qtd;
    }
}
