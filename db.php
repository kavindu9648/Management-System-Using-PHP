<?php
//Created Connecgtion with the database
$connection=mysqli_connect('localhost','root','','studentms');

//Checking Database Connection
if($connection){
  echo 'Successful';
}else{
  echo 'Fail';
}

?>