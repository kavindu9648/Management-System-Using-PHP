<?php
$u=$_POST['un'];
$p=$_POST['pw'];

//Creating Connection With Database
include_once('db.php');
$con=mysqli_connect('localhost','root','','studentms');
if($con){
  /*if(!$con){
  echo "<b>Successfully Not Saved</b><br>";
  } */

// Store Data In Database Table
  //Assign As Variable-$sql="insert into users values('$u','$p')";
    $res=mysqli_query($con,"insert into users values('$u','$p')");

        if($res){
            echo "Successfully Saved";


        }else{
            echo "Successfully Not Saved";
        }
    
}else{
    echo "Failed";
}


?>