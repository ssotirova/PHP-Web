<?php

$first = floatval(readline());
$second = floatval(readline());

$sum = (float)($first + $second);
$result = number_format($sum, 2,'.','');

echo "\$firstNumber + \$secondNumber = $first + $second = $result";