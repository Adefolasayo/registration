<?php

print_r($_POST);


$name = $_POST['name'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$country = $_POST['country'];

echo"<br> NAME: ", $name, "<br>";
echo" EMAIL: ", $email, "<br>";
echo" DATE OF BIRTH: ", $DOB, "<br>";
echo" GENDER: ", $gender, "<br>";
echo" COUNTRY: ", $country, "<br>";





$csv = 
array($_POST['name'],$_POST['email'],$_POST['DOB'],$_POST['gender'], $_POST['country']);

$file = fopen('userdata.csv', 'a');

foreach ($csv as $line) 
{
  fputcsv($file,explode(',',$line));
}

fclose($file); 
?>
