<?php

/**
 * Esta é uma função de exemplo
 * apenas para demonstrar o PHPDoc
 * @author Angela
 */
function exemplo() {
    echo 'oi';
}


$paises = ['Brasil', 'Argentina', 'Uruguai', 'Colombia'];

// Funções para navegação entre os elementos de um array
echo current($paises); // posiciona o cursor no elemento corrente do array
echo next($paises);    // posiciona o cursor no próximo elemento do array
echo prev($paises);    // posiciona o cursor no elemento anterior do array
echo end($paises);     // posiciona o cursor no último elemento do array