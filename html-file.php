<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Php day 1" ?></title>
</head>
<body>
    <?php $txt = "Javascript"?>
    <h1><?php echo"I love $txt"?></h1>
    <?php 
       $name = "nasrin";
       if($name == "nasrin"){
           echo "Login successful";
       }else{
           echo "Not logged in.";
       };
?>
<br>
<?php
       function writeMsg(){
           echo "Hi, nasrin it's ur function. <br>";
       }

       writeMsg();


       function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
    ?>
</body>
</html>