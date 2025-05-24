<?php
session_start();


$con =mysqli_connect('localhost','root');
if($con){
    echo("connection sucessful");
}else{
    echo"connection failed";
}
mysqli_select_db($con,'quiz');

$name=$_POST['User_'];
$pass=$_POST['Pass'];


$q="select * from signin where name='$name' && password='$pass'";
$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['User_']=$name;
    header('location:home.php');
}else{
    header('location:login.php');
}



?>