<?php

/**
 * fetchWordArray()
 *
 * @param string $wordFile Arquivo contendo as palavras.
 * @return array|null O array de caracteres contendo a palavra.
 */
function fetchWordArray($wordFile) {

    $file = fopen($wordFile,'r');

    if ($file) {
        $random_line = null;
        $line = null;
        $count = 0;

        while (($line = fgets($file)) !== false) {
            $count++;
            if(rand() % $count == 0) {
                $random_line = trim($line);
            }
        }

        if (!feof($file)) {
            fclose($file);
            return null;
        } else {
            fclose($file);
        }
    }
    $answer = str_split($random_line);
    return $answer;
}

/**
 * Função: hideCharacters()
 *
 * @param array $answer A palavra cujos caracteres devem ser ocultados.
 * @return string A string de caracteres com os caracteres ocultos.
 */
function hideCharacters($answer) {
    $noOfHiddenChars = floor((sizeof($answer)/2) + 1);
    $count = 0;
    $hidden = $answer;
    while ($count < $noOfHiddenChars) {
        $rand_element = rand(0,sizeof($answer)-2);
        if( $hidden[$rand_element] != '_' ) {
            $hidden = str_replace($hidden[$rand_element],'_',$hidden,$replace_count);
            $count = $count + $replace_count;
        }
    }
    return $hidden;
}

/**
 * Função: checkAndReplace()
 *
 * @param string $userInput Entrada do usuário.
 * @param string $hidden String oculta.
 * @param array $answer Resposta.
 * @return array O array de caracteres atualizado.
 */
function checkAndReplace($userInput, $hidden, $answer) {
    $i = 0;
    $wrongGuess = true;

    while($i < count($answer)) {
        if ($answer[$i] == $userInput) {
            $hidden[$i] = $userInput;
            $wrongGuess = false;
        }
        $i = $i + 1;
    }

    if (!$wrongGuess) $_SESSION['attempts'] = $_SESSION['attempts'] - 1;
    return $hidden;
}

/**
 * Função: checkGameOver()
 *
 * @param int $MAX_ATTEMPTS O número máximo de tentativas.
 * @param int $userAttempts O número de tentativas feitas pelo usuário.
 * @param array $answer O array de caracteres contendo a resposta.
 * @param string $hidden A string oculta.
 * @return array O array de caracteres atualizado.
 */
function checkGameOver($MAX_ATTEMPTS, $userAttempts, $answer, $hidden) {

    if ($userAttempts >= $MAX_ATTEMPTS) {
        echo "Fim de jogo. A palavra correta era ";
        foreach ($answer as $letter) echo $letter;
        echo '<br><form action = "" method = "post"><input type = "submit" name' . 
            ' = "newWord" value = "Tentar outra palavra"/></form><br>';
        die();
    }

    if ($hidden == $answer) {
        echo "Fim de jogo. A palavra correta é realmente ";
        foreach ($answer as $letter) echo $letter;
        echo '<br><form action = "" method = "post"><input ' . 
            'type = "submit" name = "newWord" value = "Tentar outra palavra"/></form><br>';
        die();
    }
}
