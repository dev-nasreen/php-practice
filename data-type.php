<?php
$x = "Nasrin akter"; // string
$y = 30; // integer
$z = true; // boolean
$m = NULL; // NULL
$n = 45.5; // double
$o = [2, 3, 4, 5, false, null, "Sima"]; // array
$p = tmpFile(); // resource
$q = new stdClass; // object

echo gettype($x)."<br>";
echo gettype($y)."<br>";
echo gettype($z)."<br>";
echo gettype($m)."<br>";
echo gettype($n)."<br>";
echo gettype($o)."<br>";
echo gettype($p)."<br>";
echo gettype($q)."<br>";

 var_dump($q);
 echo "<br>";
 var_dump($o);
 echo "<br>";

 echo str_word_count($x);
  echo "<br>";
 echo strpos($x, "akter");
  echo "<br>";
 echo str_replace(  "akter", "fatema", "Nasreen akter");
  echo "<br>";
 echo str_replace("world", "Dolly", "Hello world");

?>