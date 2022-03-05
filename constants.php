<?php 
//A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
//To create a constant, use the define() function.
//define(name, value, case-insensitive)
//name: Specifies the name of the constant
//value: Specifies the value of the constant
//case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false


echo "case-sensitive constant GREETING => ";
define("GREETING", "Welcome to my office <br>");
echo GREETING;

//case-insensitive:
echo " case-insensitive constant => ";
    define("Greeting", "Hello world", true);
    echo greeting;

?>
