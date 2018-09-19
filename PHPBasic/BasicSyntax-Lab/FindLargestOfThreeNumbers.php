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
}