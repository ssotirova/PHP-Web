<?php

$text = readline();
$commands = readline();

$symbol = substr($commands, 0, strpos($commands, ' '));
$occurrance = substr($commands, strpos($commands, ' ') + 1);

$count = 0;

for($i = 1; $i <= strlen($text); $i++){
    if($text[$i] == $symbol){
        $count++;
        if ($count == $occurrance){
            echo $i;
            return;
        }
    }
}

echo "Find the letter yourself!";