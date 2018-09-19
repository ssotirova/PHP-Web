<<<<<<< HEAD
<?php

$text = "";

while ($text !== "end"){
    $text = readline();
    if($text == "end"){
        return;
    }
    $reverced = strrev($text);
    echo "$text = $reverced" . PHP_EOL;
=======
<?php

$text = "";

while ($text !== "end"){
    $text = readline();
    if($text == "end"){
        return;
    }
    $reverced = strrev($text);
    echo "$text = $reverced" . PHP_EOL;
>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
}