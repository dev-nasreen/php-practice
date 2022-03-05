<?php
$a = 40;
$b = 20;



$sum = $a + $b;
$substruct = $a - $b;
$divise = $a / $b;

echo " sum of $a + $b = $sum"."<br>";
echo " minus of $a - $b = $substruct"."<br>";
echo " division of $a / $b = $divise"."<br>";

// scope of variable === local scope & Global scope ======

$x = 5;

function myTest(){
    //using x inside ethis function will not show any result. $x is global variable;
    //A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
    $x = 10; 
    echo "<p> Variable x inside function is: $x </p>";
}

myTest();

echo "<p> Variable x outside function is: $x </p>";
?>