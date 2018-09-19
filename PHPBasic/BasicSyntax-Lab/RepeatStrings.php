<?php

$text = explode(" ",readline());

$result = "";
for($i = 0; $i < count($text); $i++){
    $result .= str_repeat($text[$i], strlen($text[$i]));
}

echo $result;