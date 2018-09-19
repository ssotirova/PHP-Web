<<<<<<< HEAD
<?php

$firstNumber = floatval(readline());
$secondNumber = floatval(readline());
$operation = readline();

if($firstNumber == 0){
    echo "Cannot divide by zero";
    return;
}

switch ($operation){
    case "sum": echo $firstNumber + $secondNumber;
        break;
    case "subtract": echo $firstNumber - $secondNumber;
        break;
    case "divide": echo $firstNumber / $secondNumber;
        break;
    case "multiply": echo $firstNumber * $secondNumber;
        break;
    default: echo "Wrong operation supplied";
        break;
=======
<?php

$firstNumber = floatval(readline());
$secondNumber = floatval(readline());
$operation = readline();

if($firstNumber == 0){
    echo "Cannot divide by zero";
    return;
}

switch ($operation){
    case "sum": echo $firstNumber + $secondNumber;
        break;
    case "subtract": echo $firstNumber - $secondNumber;
        break;
    case "divide": echo $firstNumber / $secondNumber;
        break;
    case "multiply": echo $firstNumber * $secondNumber;
        break;
    default: echo "Wrong operation supplied";
        break;
>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
}