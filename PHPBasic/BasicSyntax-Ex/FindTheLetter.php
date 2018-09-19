<<<<<<< HEAD
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

=======
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

>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
echo "Find the letter yourself!";