class HangmanGame {

private $wordFile;
private $answer;
private $hidden;
private $MAX_ATTEMPTS;
private $userAttempts;

public function __construct($wordFile, $maxAttempts = 6) {
    $this->wordFile = $wordFile;
    $this->MAX_ATTEMPTS = $maxAttempts;
    $this->userAttempts = 0;
    $this->fetchWordArray();
}

private function fetchWordArray() {
    $file = fopen($this->wordFile, 'r');

    if ($file) {
        $random_line = null;
        $line = null;
        $count = 0;

        while (($line = fgets($file)) !== false) {
            $count++;
            if (rand() % $count == 0) {
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

    $this->answer = str_split($random_line);
    $this->hidden = $this->hideCharacters($this->answer);
}

private function hideCharacters($answer) {
    $noOfHiddenChars = floor((sizeof($answer) / 2) + 1);
    $count = 0;
    $hidden = $answer;

    while ($count < $noOfHiddenChars) {
        $rand_element = rand(0, sizeof($answer) - 2);
        if ($hidden[$rand_element] != '_') {
            $hidden = str_replace($hidden[$rand_element], '_', $hidden, $replace_count);
            $count = $count + $replace_count;
        }
    }

    return $hidden;
}

public function checkAndReplace($userInput) {
    $i = 0;
    $wrongGuess = true;

    while ($i < count($this->answer)) {
        if ($this->answer[$i] == $userInput) {
            $this->hidden[$i] = $userInput;
            $wrongGuess = false;
        }
        $i = $i + 1;
    }

    if (!$wrongGuess) {
        $this->userAttempts++;
    }
}

public function checkGameOver() {
    if ($this->userAttempts >= $this->MAX_ATTEMPTS) {
        echo "Fim de jogo. A palavra correta era " . implode('', $this->answer) . '<br>
        <form action="" method="post">
            <input type="submit" name="newWord" value="Tentar outra palavra"/>
        </form><br>';
        return true;
    }

    if ($this->hidden == $this->answer) {
        echo "Fim de jogo. A palavra correta é realmente " . implode('', $this->answer) . '<br>';
        echo '<form action="" method="post">
            <input type="submit" name="newWord" value="Tentar outra palavra"/>
        </form><br>';
        return true;
    }

    return false;
}

public function getHiddenWord() {
    return $this->hidden;
}

public function getMaxAttempts() {
    return $this->MAX_ATTEMPTS;
}

public function getUserAttempts() {
    return $this->userAttempts;
}
}