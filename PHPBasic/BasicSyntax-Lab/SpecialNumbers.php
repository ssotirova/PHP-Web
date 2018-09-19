<?php

$number = intval(readline());
$temp = 0;

for ($i = 1; $i <= $number; $i++){

    $sumOfDigit = 0;
    $temp = $i;

    while ($temp > 0){
        $sumOfDigit += $temp % 10;
        $temp = $temp / 10;
    }

    if($sumOfDigit == 5 || $sumOfDigit == 7 || $sumOfDigit == 11){
        echo "$i -> True". PHP_EOL;
    }else{
        echo "$i -> False" . PHP_EOL;
    }
}