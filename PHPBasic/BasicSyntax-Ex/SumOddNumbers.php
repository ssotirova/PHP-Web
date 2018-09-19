<<<<<<< HEAD
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

=======
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

>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
echo "Sum: $sum";