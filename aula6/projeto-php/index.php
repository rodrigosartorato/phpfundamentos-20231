<?php
// declare(strict_types=1);
require_once "autoload/autoload.php";

use App\Repositorio\Curso;
use App\Uteis\Conexao;

try {
    $configBancoDeDados = require 'config/banco-de-dados.php';
    $conexao = new Conexao($configBancoDeDados);

    $cursoRepositorio = new Curso($conexao);
    $cursos = $cursoRepositorio->todos();
} catch (\PDOException $e) {
    echo 'Erro inesperado!';
    echo $e->getMessage();
    exit;
}


require_once "exibicao/principal.php";

