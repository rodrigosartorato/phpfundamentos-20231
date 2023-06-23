<?php
/**
 * https://docs.phpdoc.org/3.0/
 */

/**
 * @link https://gist.github.com/rafael-neri/ab3e58803a08cb4def059fce4e3c0e40
 * 
 * 
 */
function validaCPF($cpf) {

    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf);
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        throw new DomainException('CPF inválido');
        // return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        // return false;
        throw new DomainException('CPF inválido');
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            // return false;
            throw new DomainException('CPF inválido');
            throw new Error();
        }
    }

    return true;    
}

echo 'Exemplo de Lançamento de exceção' . PHP_EOL;

$meuCPF = '123456789101';
try {
    //code...
    $cpfEhValido = validaCPF($meuCPF);
} catch (\Throwable $problema) {
    echo $problema->getMessage();
}

echo 'CPF válido' . PHP_EOL;

echo 'Fim.';
