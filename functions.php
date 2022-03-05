<?php declare(strict_types=1);
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

function addNumbers(int $a, int $b) {
  return $a + $b;
}
//echo addNumbers(5, "5 days");
echo addNumbers(5, 8);
//=====================
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);

//======================
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

//==================
function addFloatNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addFloatNumbers(1.2, 5.2);

echo "<br>============<br>";
//=============== pass-by-reference
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>