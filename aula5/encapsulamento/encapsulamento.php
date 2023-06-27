<?php

class Carro {
    private string $marca;
    private string $modelo;
    private int $ano;

    public function __construct(string | null $marca = null, string | null $modelo = null, $ano = null) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function setMarca($marca) {
        $this->modelo = $marca;
    }
    
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setAno($ano) {
        $this->modelo = $ano;
    }

    public function getMarca() {
        return $this->marca;
    }
    
    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getInfo() {
        return $this;
    }

}

// Instanciando objeto da classe Carro
$carro1 = new Carro('Ford', 'KA', 2002);

// Chamando métodos (comportamento)
echo $carro1->getModelo();

var_dump($carro1->getInfo());
