<?php

namespace TreinamentoPHP\Exemplos\Encapsulamento;

class Veiculo {
    /**
     * Promoção de propriedade de construtor
     * Adicionando a visibilidade nos parâmetros
     * @param string $marca
     */
    public function __construct(protected string $marca) { }
    
    protected function getMarca() {
        return $this->formataTexto($this->marca);
    }

    private function formataTexto($texto) {
        return PHP_EOL . "Marca: $texto";
    }
}

class Carro extends Veiculo {
    // private $modelo;
    
    public function __construct($marca, private $modelo) {
        parent::__construct($marca);
        $this->modelo = $modelo;
    }
    
    public function getModeloCompleto() {
        $marca = $this->getMarca();
        // echo $this->formataTexto(); // método privado na classe pai, não pode ser acessado pela classe filha
        return $marca . ' ' . $this->modelo;
    }
}

// Criando uma instância da classe Car
$carro = new Carro('Ford', 'Mustang');
// $carro->getMarca(); // Método protegido da classe pai não é acessível pela instância

echo $carro->getModeloCompleto(); // Saída: Ford Mustang
