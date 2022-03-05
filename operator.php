<?php
// PHP divides the operators in the following groups:
// Arithmetic operators
// Assignment operators
// Comparison operators
// Increment/Decrement operators
// Logical operators
// String operators
// Array operators
// Conditional assignment operators

// logical operations
function showAndOperation(){
$x = 100;
$y = 50;

if($x === 100 && $y === 50){
    echo " u r absolutely right <br>";
}else{
    echo " oh no, u r wrong <br>";
}

}
showAndOperation();


function showOrOperation(){
$a = 40; 
$b = 20;
if ($a == 40 or $b == 80) {
    echo "Hello world! <br>";
}else{
    echo "bye bye world <br>";
}
}
showOrOperation();

function showXorOperation(){
    $x = 100;
    $y = 50;
    if($x == 100 xor $y == 80){
        echo "Hello world <br>";
    }
}
showXorOperation();

$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world! <br>";
}

$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}

//The PHP array operators are used to compare arrays.
    // $a = array('a' => "red", );
    // $b = ["yellow", "blue"];

    
    // print_r($a + $b)
?>