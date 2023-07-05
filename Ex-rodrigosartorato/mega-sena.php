<?php
// Função para ler a entrada do usuário
function lerEntrada($mensagem)
{
    echo $mensagem . ": ";
    return trim(fgets(STDIN));
}

// Ler o nome do apostador
$nomeApostador = lerEntrada("Digite o nome do apostador");

// Ler os 6 números do apostador
$numerosApostador = array();
for ($i = 0; $i < 6; $i++) {
    $numero = lerEntrada("Digite o número " . ($i + 1));
    $numerosApostador[] = intval($numero);
}

// Realizar o sorteio de 6 números
$numerosSorteados = array();
for ($i = 0; $i < 6; $i++) {
    $numeroSorteado = rand(1, 60);
    $numerosSorteados[] = $numeroSorteado;
}

// Verificar se o apostador acertou todos os números
$acertouTodos = (count(array_intersect($numerosApostador, $numerosSorteados)) == 6);

// Exibir os números sorteados
echo "Números sorteados: " . implode(", ", $numerosSorteados) . PHP_EOL;

// Exibir o resultado
if ($acertouTodos) {
    echo "Parabéns, $nomeApostador! Você foi contemplado na mega-sena, acertando os 6 números." . PHP_EOL;
    echo "Confira os seus números da sorte: " . implode(", ", $numerosApostador);
} else {
    $numeroDeAcertos = count(array_intersect($numerosApostador, $numerosSorteados));
    echo "Infelizmente, $nomeApostador, você acertou apenas $numeroDeAcertos números" . PHP_EOL;
    echo "Seus números da sorte: " . implode(", ", $numerosApostador);
}
?>
