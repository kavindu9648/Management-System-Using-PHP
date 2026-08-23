<?php
// Getting Data Form
$u=$_POST['un'];
$p=$_POST['pw'];

//Created Connecgtion with the database
include_once('db.php');
/*$connection=mysqli_connect('localhost','root','','studentms');

//Checking Database Connection
if($connection){
  echo 'Successful';
}else{
  echo 'Fail';
}
*/
//select database Collumns
$result=mysqli_query($connection,"select*from users where username='$u'and password='$p'");

$b=false;

while($row=mysqli_fetch_array($result)){
    $b=true;
}

if($b){
    header("location:dashboard.html");
}else{
    header("location:login.html");
}

?>