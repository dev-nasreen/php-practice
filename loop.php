<?php
$x = 0;

while($x <= 100){
    echo "The number is: $x <br>";

    $x += 10;
}
echo "========================== <br>";
//In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false.
$y = 1;

do{
    echo "the number y is: $y <br>";
    $y++;
}while($y <= 5);
echo "========================== <br>";
//for loop
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
echo "========================== <br>";
//foreach loop

$colors = array("red", "green", "blue", "yellow");

foreach($colors as $elm){
    echo "$elm <br>";
}

echo "========================== <br>";

$age = array("peter"=>"35", "Ben"=>"37", "Joe"=>"45");

foreach($age as $x => $val){
    echo "$x = $val <br>";
}

echo "========================== <br>";

for($x = 0; $x < 10; $x++){
    if($x == 4){
        break;
    }
    echo "The number is: $x <br>";
}
?>