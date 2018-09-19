<<<<<<< HEAD
<?php

$text = explode(" ",readline());

$result = "";
for($i = 0; $i < count($text); $i++){
    $result .= str_repeat($text[$i], strlen($text[$i]));
}

=======
<?php

$text = explode(" ",readline());

$result = "";
for($i = 0; $i < count($text); $i++){
    $result .= str_repeat($text[$i], strlen($text[$i]));
}

>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
echo $result;