<?php
function input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = input($_POST['username']) ;
$email = input($_POST['email']) ;
$district =input( $_POST['district']) ;
$gender = input($_POST['gender']) ;

 echo "Welcome $name and Your email is $email <br>";
 echo " Your district is $district <br>";
 echo "Your gender is $gender <br>";
?>