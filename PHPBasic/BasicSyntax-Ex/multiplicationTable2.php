<<<<<<< HEAD
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
=======
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
>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
}