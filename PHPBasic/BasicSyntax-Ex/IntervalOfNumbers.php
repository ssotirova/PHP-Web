<?php

$firstNumber = intval(readline());
$lastNumber = intval(readline());

$minValue = min($firstNumber, $lastNumber);
$maxValue = max($firstNumber, $lastNumber);

for($i = $minValue; $i<=$maxValue; $i++){
    echo $i . PHP_EOL;
}