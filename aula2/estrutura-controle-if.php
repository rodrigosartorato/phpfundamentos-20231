<?php

$idade = 18;

if ($idade == 18) {
    echo 'Idade igual a 18';
}

$idade = 17;

if ($idade == 18) {
    echo 'Idade igual a 18';
} else {
    echo 'Idade não é igual a 18';
}

if ($idade == 18):
    echo 'Idade igual a 18';
endif;

echo $idade >= 18 ? "É maior de idade" : "É menor de idade";