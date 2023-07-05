<?php
require_once "functions.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Calculator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Online Calculator</h1>

    <form method="post" action="">
        <label for="operation">Choose an operation:</label>
        <select id="operation" name="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>

        <br><br>

        <label for="num1">First number:</label>
        <input type="text" id="num1" name="num1">

        <br><br>

        <label for="num2">Second number:</label>
        <input type="text" id="num2" name="num2">

        <br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $operation = $_POST["operation"];
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $result = performCalculation($operation, $num1, $num2);

        echo "<h2>Result: $result</h2>";
    }
    ?>

</body>
</html>
