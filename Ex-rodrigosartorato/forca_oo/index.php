<?php
session_start();

include __DIR__ . '/HangmanGame.php';

if (isset($_POST['newWord'])) {
    unset($_SESSION['hangman']);
}

if (!isset($_SESSION['hangman'])) {
    $hangman = new HangmanGame('wordlist.txt');
    $_SESSION['hangman'] = $hangman;
    echo 'Tentativas restantes: ' . ($hangman->getMaxAttempts() - $hangman->getUserAttempts()) . '<br>';
} else {
    $hangman = $_SESSION['hangman'];

    if (isset($_POST['userInput'])) {
        $userInput = $_POST['userInput'];
        $hangman->checkAndReplace(strtolower($userInput));
        $hangman->checkGameOver();
    }

    echo 'Tentativas restantes: ' . ($hangman->getMaxAttempts() - $hangman->getUserAttempts()) . '<br>';
}

$hidden = $hangman->getHiddenWord();
foreach ($hidden as $char) {
    echo $char . ' ';
}
?>

<script type="application/javascript">
    function validateInput() {
        var x = document.forms["inputForm"]["userInput"].value;
        if (x == "" || x == " ") {
            alert("Please enter a character.");
            return false;
        }
        if (!isNaN(x)) {
            alert("Please enter a character.");
            return false;
        }
    }
</script>

<form name="inputForm" action="" method="post">
    Seu palpite: <input name="userInput" type="text" size="1" maxlength="1"/>
    <input type="submit" value="Check" onclick="return validateInput()"/>
    <input type="submit" name="newWord" value="Try another Word"/>
</form>