<?php
// Função para ler a entrada do usuário
function lerEntrada($mensagem)
{
    echo $mensagem . ": ";
    return readline(); //trim(fgets(STDIN));
}

// Ler a operação, o primeiro número e o segundo número
$operacao = lerEntrada("Digite a operação (adição, subtração, multiplicação ou divisão)");
$numero1 = lerEntrada("Digite o primeiro número");
$numero2 = lerEntrada("Digite o segundo número");

// Converter os números para float
$numero1 = floatval($numero1);
$numero2 = floatval($numero2);

// Realizar a operação selecionada
$resultado = 0;

if ($operacao === "adição") {
    $resultado = $numero1 + $numero2;
} elseif ($operacao === "subtração") {
    $resultado = $numero1 - $numero2;
} elseif ($operacao === "multiplicação") {
    $resultado = $numero1 * $numero2;
} elseif ($operacao === "divisão") {
    if ($numero2 != 0) {
        $resultado = $numero1 / $numero2;
    } else {
        echo "Erro: divisão por zero não é permitida!";
        exit;
    }
} else {
    echo "Erro: operação inválida!";
    exit;
}

// Exibir o resultado
echo "Resultado: " . $resultado;
?>
