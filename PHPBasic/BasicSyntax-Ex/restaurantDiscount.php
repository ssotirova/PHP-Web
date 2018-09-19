<?php

$groupSize = intval(readline());
$package = readline();
$hall = "";
$price = 0;

if($groupSize <= 50){
    $hall = "Small Hall";
    $price = 2500;
}elseif ($groupSize > 50 && $groupSize <= 100){
    $hall = "Terrace";
    $price = 5000;
}elseif ($groupSize > 100 && $groupSize <= 120){
    $hall = "Great Hall";
    $price = 7500;
}elseif ($groupSize > 120){
    echo "We do not have an appropriate hall.";
    return;
}

$discount = 0;
$priceDiscount = 0;

if ($package == "Normal"){
    $discount = 0.05;
    $priceDiscount = 500;
}elseif ($package == "Gold"){
    $discount = 0.1;
    $priceDiscount = 750;
}elseif ($package == "Platinum"){
    $discount = 0.15;
    $priceDiscount = 1000;
}

$totalPrice = $price + $priceDiscount;
$totalDiscount = $totalPrice - ($totalPrice * $discount);
$priceForPerson = $totalDiscount / $groupSize;
$result = number_format($priceForPerson, 2);

echo "We can offer you the $hall" . PHP_EOL;
echo "The price per person is $result$";
