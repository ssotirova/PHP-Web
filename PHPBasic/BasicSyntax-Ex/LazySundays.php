<<<<<<< HEAD
<?php

$month = date('m', strtotime(readline()));

$total_days = cal_days_in_month(CAL_GREGORIAN, $month, 2018);
for($i = 1; $i <= $total_days; $i++){
    if (date('N', strtotime(2018 . '-' . $month . '-' . $i)) == 7){
        echo $i . "rd " . $month . ", " . "2018\n";
    }
=======
<?php

$month = date('m', strtotime(readline()));

$total_days = cal_days_in_month(CAL_GREGORIAN, $month, 2018);
for($i = 1; $i <= $total_days; $i++){
    if (date('N', strtotime(2018 . '-' . $month . '-' . $i)) == 7){
        echo $i . "rd " . $month . ", " . "2018\n";
    }
>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
}