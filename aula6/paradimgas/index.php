<?php

$largura = 5;
$altura = 3;

// Procedural
require_once 'funcoesRetangulo.php';

$area = calcularAreaRetangulo($largura, $altura);
$perimetro = calcularPerimetroRetangulo($largura, $altura);
echo "Área do retângulo: " . $area . "<br>";
echo "Perímetro do retângulo: " . $perimetro;


// Orientado a Objeto
require_once 'Retangulo.php';
use TreinamentoPHP\Exemplos\Paradigmas\OO\Retangulo;

$retangulo = new Retangulo($largura, $altura);
$area = $retangulo->calcularArea();
$perimetro = $retangulo->calcularPerimetro();
echo "Área do retângulo: " . $area . "<br>";
echo "Perímetro do retângulo: " . $perimetro;
