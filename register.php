<?php
$u=$_POST['un'];
$p=$_POST['pw'];

//Creating Connection With Database

$con=mysqli_connect('localhost','root','','studentms');
if($con){
    echo "Success";
}else{
    echo "Failed";
}


?>