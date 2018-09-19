<<<<<<< HEAD
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
=======
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
>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
}