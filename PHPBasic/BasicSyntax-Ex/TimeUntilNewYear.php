<<<<<<< HEAD
<?php
$today = getdate();
$newYear = mktime(0, 0, 0, 1, 1, $today['year'] + 1);
$diff = $newYear - $today[0];
if(date("I", $today[0]) > 0) {
    $diff -= 3600;
}
echo "Hours until new year : " . round($diff / 3600) . "\n";
echo "Minutes until new year : " . round($diff / 60) . "\n";
echo "Seconds until new year : $diff\n";
=======
<?php
$today = getdate();
$newYear = mktime(0, 0, 0, 1, 1, $today['year'] + 1);
$diff = $newYear - $today[0];
if(date("I", $today[0]) > 0) {
    $diff -= 3600;
}
echo "Hours until new year : " . round($diff / 3600) . "\n";
echo "Minutes until new year : " . round($diff / 60) . "\n";
echo "Seconds until new year : $diff\n";
>>>>>>> 7698c20ce017b392a49106c609e8bea8116901c7
echo "Days:Hours:Minutes:Seconds " . round($diff / 86400) . ":" . date("H:i:s", $today[0]);