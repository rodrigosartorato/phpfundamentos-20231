<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calculator">
        <h2>Calculator</h2>

        <form action="calculator.php" method="post">
            <div class="form-group">
                <label for="operation">Operation:</label>
                <select id="operation" name="operation" required>
                    <option value="addition">Addition</option>
                    <option value="subtraction">Subtraction</option>
                    <option value="multiplication">Multiplication</option>
                    <option value="division">Division</option>
                </select>
            </div>

            <div class="form-group">
                <label for="num1">First Number:</label>
                <input type="number" id="num1" name="num1" required>
            </div>

            <div class="form-group">
                <label for="num2">Second Number:</label>
                <input type="number" id="num2" name="num2" required>
            </div>

            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>
