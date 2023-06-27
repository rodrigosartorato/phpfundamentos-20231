<?php

interface IProduto {
    public function getNome();
    public function getPreco();
}

abstract class Produto implements IProduto {
    protected $nome;
    protected $preco;
    protected $descricao;

    public function __construct($nome, $preco, $descricao) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    abstract function getDescricao();
}

class Livro extends Produto {
    protected $autor;

    public function __construct($nome, $preco, $descricao, $autor) {
        parent::__construct($nome, $preco, $descricao);
        $this->autor = $autor;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getDescricao() {
        return $this->descricao;
    }
}

class DVD extends Produto {
    protected $diretor;

    public function __construct($nome, $preco, $descricao, $diretor) {
        parent::__construct($nome, $preco, $descricao);
        $this->diretor = $diretor;
    }

    public function getDiretor() {
        return $this->diretor;
    }

    public function getDescricao() {
        return $this->descricao;
    }
}

// Exemplo de uso:
$livro = new Livro("O Senhor dos Anéis", 49.99, "Fantasia épica", "J.R.R. Tolkien");
$dvd = new DVD("Pulp Fiction", 29.99, "Crime, Drama", "Quentin Tarantino");

echo "Nome do livro: " . $livro->getNome() . "\n";
echo "Preço do livro: " . $livro->getPreco() . "\n";
echo "Descrição do livro: " . $livro->getDescricao() . "\n";
echo "Autor do livro: " . $livro->getAutor() . "\n";

echo "Nome do DVD: " . $dvd->getNome() . "\n";
echo "Preço do DVD: " . $dvd->getPreco() . "\n";
echo "Descrição do DVD: " . $dvd->getDescricao() . "\n";
echo "Diretor do DVD: " . $dvd->getDiretor() . "\n";

