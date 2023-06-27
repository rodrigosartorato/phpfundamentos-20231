<?php

// require_once './MinhasClasses/Mensagem.php';
// require_once './ClassesTerceiros/Mensagem.php';

spl_autoload_register(function ($className) {
    $path = "{$className}.php";
    echo 'Entrou no spl_autoload_register, chamando a classe: "' . $className . '"<br>' . PHP_EOL;
    echo "require_once '$path'<br>" . PHP_EOL;
    require_once $path;
});

echo '<h3>Estudando sobre namespace</h3>' . PHP_EOL;
echo '<hr>' . PHP_EOL;

$minha = new MinhasClasses\Mensagem();

$terceiros = new ClassesDeTerceiros\Mensagem();