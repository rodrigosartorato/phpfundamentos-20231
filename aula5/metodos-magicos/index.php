<?php

require 'Endereco.php';

$enderecoCasa = new Endereco();
$enderecoCasa->logradouro = 'Rua dos Bobos';
$enderecoCasa->numero = '0';
$enderecoCasa->complemento = '';
$enderecoCasa->cep = '00000-999';
echo $enderecoCasa->getEnderecoCompleto();
// unset($enderecoCasa);

$enderecoEscritorio = new Endereco();
// $enderecoEscritorio->tipo = 'Comercial';
$enderecoEscritorio->logradouro = 'Rua da Esperança';
$enderecoEscritorio->numero = '10';
$enderecoEscritorio->complemento = 'Apt. 101';
$enderecoEscritorio->cep = '00001-999';

echo $enderecoEscritorio->getEnderecoCompleto();


