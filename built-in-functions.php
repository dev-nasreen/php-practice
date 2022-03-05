<?php
// $today = date("F j, Y, g:i a");                   // March 10, 2001, 5:16 pm
// $today = date("m.d.y");                           // 03.10.01
// $today = date("j, n, Y");                         // 10, 3, 2001
// $today = date("Ymd");                             // 20010310
// $today = date('h-i-s, j-m-y, it is w Day');       // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
// $today = date('\i\t \i\s \t\h\e jS \d\a\y.');     // It is the 10th day (10ème jour du mois).
// $today = date("D M j G:i:s T Y");                 // Sat Mar 10 17:16:18 MST 2001
// $today = date('H:m:s \m \e\s\t\ \l\e\ \m\o\i\s'); // 17:03:18 m est le mois
// $today = date("H:i:s");                           // 17:16:18
// $today = date("Y-m-d H:i:s");                     // 2001-03-10 17:16:18 (le format DATETIME de MySQL)

var_dump(checkdate(3,5,-400));
echo "<br>";

// $date = date_create("2022-03-1");
// date_add($date, date_interval_create_from_date_string("40 days"));
// echo date_format($date, 'Y-m-d');

// $date = date_create("2016-04-20");
// echo date_format($date, "Y/m/d");

$date=date_create();
date_date_set($date,2020,10,30);
echo date_format($date,"Y/m/d");
echo "<br>";
date_default_timezone_set("Asia/Bangkok");
echo date_default_timezone_get();
echo "<br>";
echo date("l") . "<br>";

echo date("l jS \of F Y h:i:s A");
echo "<br>";
print_r(getdate()) ;
?>