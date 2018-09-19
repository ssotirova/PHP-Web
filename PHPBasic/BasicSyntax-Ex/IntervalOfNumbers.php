<<<<<<< HEAD
<?php

$firstNumber = intval(readline());
$lastNumber = intval(readline());

$minValue = min($firstNumber, $lastNumber);
$maxValue = max($firstNumber, $lastNumber);

for($i = $minValue; $i<=$maxValue; $i++){
    echo $i . PHP_EOL;
=======
<?php

$firstNumber = intval(readline());
$lastNumber = intval(readline());

$minValue = min($firstNumber, $lastNumber);
$maxValue = max($firstNumber, $lastNumber);

for($i = $minValue; $i<=$maxValue; $i++){
    echo $i . PHP_EOL;
>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
}