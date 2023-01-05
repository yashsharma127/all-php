<?php

$user = 'Manish@mk9';
$pass = "Manish@mk1995";


if ($_SERVER['REQUEST_METHOD']=='POST'){

if( strcmp($_POST['username'],$user) == 0 && strcmp($_POST['pass'],$pass) == 0 )
{
  echo "login successfull";
}
else
{
  echo "Does not match";
}
  
  } 
  
?>