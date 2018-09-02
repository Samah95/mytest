
<?php
session_start();
require 'connectToDB.php';
$name=$_POST['username'];
$pass=$_POST['password'];

$query='select * from account where username="'.$name.'" and password="'.$pass.'"';
$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)==1){
    $_SESSION["user"] = $name;
    header('location: welcome.php');
}

else echo "error";