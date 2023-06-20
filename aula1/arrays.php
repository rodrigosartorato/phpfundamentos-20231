<?php

// Declarando array
$linguagens = ['PHP', 'Java', 'C#'];

// Ou assim
$linguagens2 = array('PHP', 'Java', 'C#');

// Imprimindo, em tela, o conteúdo do array
echo $linguagens[0] . ' está na primeira posição do array (0)' . PHP_EOL;
echo $linguagens[1] . ' está na segunda posição do array (1)' . PHP_EOL;
echo $linguagens[2] . ' está na terceira posição do array (2)' . PHP_EOL;

// Adiciona elemento no array 
$linguagens[] = 'Lua';              // Inserindo elemento na última posição
$linguagens[2] = 'Python';          // Inserindo elemento na posição 2
array_push($linguagens, 'CSharp');  // Inserindo elemento na última posição com função

print_r($linguagens);

// Adiciona elemento no início
array_unshift($linguagens, 'Javascript'); 

print_r($linguagens);