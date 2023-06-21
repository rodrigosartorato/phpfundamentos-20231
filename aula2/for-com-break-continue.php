<?php

for ($i = 1; $i <= 10; $i++) {
  // verifica se $i é múltiplo de 3
  if ($i % 3 == 0) {
    // se for, ignora o restante do código dentro do laço
    continue;
  }
  
  // imprime o valor de $i
  echo $i . ' ';
  
  // verifica se $i é igual a 7
  if ($i == 7) {
    // se for, encerra o laço completamente
    break;
  }
}

echo PHP_EOL. 'Fim do programa';

