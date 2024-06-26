<?php
include 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case "add":
            $result = add($num1, $num2);
            break;
        case "subtract":
            $result = subtract($num1, $num2);
            break;
        case "multiply":
            $result = multiply($num1, $num2);
            break;
        case "divide":
            $result = divide($num1, $num2);
            break;
        case "exponentiate":
            $result = exponentiate($num1, $num2);
            break;
        case "percentage":
            $result = calculatePercentage($num1, $num2);
            break;
        case "squareRoot":
            $result = calculateSquareRoot($num1);
            break;
        case "logarithm":
            $result = calculateLogarithm($num1, $num2);
            break;
        default:
            $result = "Invalid operation";
    }

    echo "Result: $result";
}

