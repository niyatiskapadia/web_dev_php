<?php
//Remove the email element from the associative array and display the updated array.
$p=array ("name"=> "niyati",
  "age"=>"21",
  "email"=>"niyatiskapadia@gmail.com");
  
 unset($p["email"]);
 print_r($p);
 
?>















