<<<<<<< HEAD
<?php

$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));
$numberThree = intval(fgets(STDIN));

$largerFromOneTwo = $numberOne;

if($numberTwo > $numberOne){
    $largerFromOneTwo = $numberTwo;
}

if($numberThree > $largerFromOneTwo){
    echo $numberThree;
}else{
    echo $largerFromOneTwo;
=======
<?php

$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));
$numberThree = intval(fgets(STDIN));

$largerFromOneTwo = $numberOne;

if($numberTwo > $numberOne){
    $largerFromOneTwo = $numberTwo;
}

if($numberThree > $largerFromOneTwo){
    echo $numberThree;
}else{
    echo $largerFromOneTwo;
>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
}