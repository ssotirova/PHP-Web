<?php

$text = readline();

if(strlen($text)< 20){
    echo $text . str_repeat('*', 20-strlen($text));
}elseif (strlen($text) > 20){
    for($i = 0; $i <= 20; $i++){
        echo $text[$i];
    }
}else{
    echo $text;
}