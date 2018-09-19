<?php

$firstNumber = intval(readline());
$secondNumber = intval(readline());

if($secondNumber > 10){
    $product = $firstNumber * $secondNumber;
    echo "$firstNumber X $secondNumber = $product" . PHP_EOL;
}

for($i = $secondNumber; $i <= 10; $i++){
    $product = $firstNumber * $i;
    echo "$firstNumber X $i = $product" . PHP_EOL;
}