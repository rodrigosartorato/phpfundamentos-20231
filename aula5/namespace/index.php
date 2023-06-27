<?php

require_once './minhas-classes/Mensagem.php';
require_once './classes-terceiros/Mensagem.php';

echo '<h3>Estudando sobre namespace</h3>';
echo '<hr>';

$minha = new MinhasClasses\Mensagem();

$terceiros = new ClassesDeTerceiros\Mensagem();