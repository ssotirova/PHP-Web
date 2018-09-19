<?php

$text = readline();

$resultNumber = "";
$resultAlhabet = "";
$resultSymbol = "";

for ($i = 0; $i < strlen($text); $i++){
    if (is_numeric($text[$i])){
        $resultNumber .= $text[$i];
    }

    if (ctype_alpha($text[$i])){
        $resultAlhabet .= $text[$i];
    }

    if (!is_numeric($text[$i]) && !ctype_alpha($text[$i])){
        $resultSymbol .= $text[$i];
    }
}

echo $resultNumber . PHP_EOL;
echo $resultAlhabet . PHP_EOL;
echo $resultSymbol . PHP_EOL;