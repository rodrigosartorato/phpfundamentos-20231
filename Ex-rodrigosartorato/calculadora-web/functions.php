<?php
function performCalculation($operation, $num1, $num2)
{
    $num1 = floatval($num1);
    $num2 = floatval($num2);
    $result = 0;

    switch ($operation) {
        case "addition":
            $result = $num1 + $num2;
            break;
        case "subtraction":
            $result = $num1 - $num2;
            break;
        case "multiplication":
            $result = $num1 * $num2;
            break;
        case "division":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Error: Division by zero is not allowed!";
                exit;
            }
            break;
        default:
            echo "Error: Invalid operation!";
            exit;
    }

    return $result;
}
?>
