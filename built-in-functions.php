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

// var_dump(checkdate(3,5,-400));
// echo "<br>";

// $date = date_create("2022-03-1");
// date_add($date, date_interval_create_from_date_string("40 days"));
// echo date_format($date, 'Y-m-d');

// $date = date_create("2016-04-20");
// echo date_format($date, "Y/m/d");

// $date=date_create();
// date_date_set($date,2020,10,30);
// echo date_format($date,"Y/m/d");
// echo "<br>";
// date_default_timezone_set("Asia/Bangkok");
// echo date_default_timezone_get();
// echo "<br>";
// echo date("l") . "<br>";

// echo date("l jS \of F Y h:i:s A");
// echo "<br>";
// print_r(getdate());

//==========================

echo (max(2,5,7,9,56,34) . "<br>");
echo (min(2,5,7,9,56,34) . "<br>");
echo (max(array(2,5,7,9,56,34, 87)) . "<br>");
echo (min(array(1,5,7,9,56,34, 87)) . "<br>");
echo(mt_rand(10,100)."<br>");
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(abs(6.7) . "<br>");
echo(abs(-6.7) . "<br>");
echo(abs(-3) . "<br>");

$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."<br>";

///string built-in functions ===========>
//trim()
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"He d!");
echo "<br>";
//ltrim() - Removes whitespace or other predefined characters from the left side of a string
//rtrim() - Removes whitespace or other predefined characters from the right side of a string
//substr_replace()
 echo substr_replace("Hello","world",0); // 0 will start replacing at the first character in the string
//substr_count()
echo substr_count("Hello world. The world is nice","world");
echo "<br>";

//substr()
echo substr("Hello world",10)."<br>";
echo substr("Hello world",1)."<br>";
echo substr("Hello world",3)."<br>";
echo substr("Hello world",7)."<br>";

echo substr("Hello world",-1)."<br>";
//strtoloower()
echo strtoupper("Hello WORLD!")."<br>";
//strtoupper()
//strlen()
echo strlen("Hello")."<br>";
//str_replace()
echo str_replace("world","Peter","Hello world!")."<br>";
//str_repeat()
echo str_repeat("Wow",13)."<br>";
//str_split()
print_r(str_split("Hello"))."<br>";
//str_word_count()
echo str_word_count("Hello world!")."<br>";
//similar_text()
echo similar_text("Hello World","Hello Peter")."<br>";
//ord()//Return the ASCII value of "h":
echo ord("h")."<br>";
echo ord("hello")."<br>";
//join()
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);
echo "<br>";
//chop()
$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!");

?>