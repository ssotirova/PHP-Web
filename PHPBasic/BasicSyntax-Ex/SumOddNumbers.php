<?php

$number = readline();
$count = 1;
$sum = 0;

for($n = 0; $n<=100; $n++){
    if($n % 2 == 1 && $count <= $number){
        echo $n . "\n";
        $count++;
        $sum += $n;
    }
}

echo "Sum: $sum";