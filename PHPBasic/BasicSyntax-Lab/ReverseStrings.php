<?php

$text = "";

while ($text !== "end"){
    $text = readline();
    if($text == "end"){
        return;
    }
    $reverced = strrev($text);
    echo "$text = $reverced" . PHP_EOL;
}