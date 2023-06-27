<?php session_start();?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hangman - Jogo da Forca</title>
</head>
<body>

    <?php
        include 'config.php';
        include 'functions.php';
        
        if (isset($_POST['newWord'])) unset($_SESSION['answer']);

        if (!isset($_SESSION['answer'])) {
            $_SESSION['attempts'] = 0;
            $answer = fetchWordArray($WORDLISTFILE);
            $_SESSION['answer'] = $answer;
            $_SESSION['hidden'] = hideCharacters($answer);
            echo 'Tentativas restantes:  '.($MAX_ATTEMPTS - $_SESSION['attempts']).'<br>';
        } else {
            if (isset ($_POST['userInput'])) {
                $userInput = $_POST['userInput'];
                $_SESSION['hidden'] = checkAndReplace(strtolower($userInput), $_SESSION['hidden'], $_SESSION['answer']);
                checkGameOver($MAX_ATTEMPTS,$_SESSION['attempts'], $_SESSION['answer'],$_SESSION['hidden']);
            }
            $_SESSION['attempts'] = $_SESSION['attempts'] + 1;
            echo 'Tentativas restantes:  '.($MAX_ATTEMPTS - $_SESSION['attempts'])."<br>";
        }
        $hidden = $_SESSION['hidden'];
        foreach ($hidden as $char) echo $char."  ";
    ?>
    <script type="application/javascript">
        function validateInput() {
        var x=document.forms["inputForm"]["userInput"].value;
        if (x=="" || x==" ") {
            alert("Please enter a character.");
            return false;
        }
        if (!isNaN(x)) {
            alert("Please enter a character.");
            return false;
        }
    }
    </script>
    <form name="inputForm" action="" method = "post">
        Seu palpite: <input name = "userInput" type = "text" size="1" maxlength="1"  />
        <input type="submit" value="Check" onclick="return validateInput()"/>
        <input type="submit" name="newWord" value = "Try another Word"/>
    </form>
</body>
</html>