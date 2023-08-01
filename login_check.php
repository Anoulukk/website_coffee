<?php
include 'config.php';
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$sql = "SELECT * FROM customer WHERE cus_firstname = '$username' AND password = '$password'";

$result=mysqli_query($conn_db,$sql);
$row=mysqli_fetch_array($result);
if($row > 0 ){
    $_SESSION["cus_firstname"]=$row['username'];
    $_SESSION["cus_lastname"]=$row['lastname'];
    $_SESSION["cus_lastname"]=$row['email'];
    $_SESSION["password"]=$row['password'];
    $show=header("location:index.php");
    $_SESSION['error']="";
}else{
    $_SESSION['error']= "<p> your username or password is invalid </p>";
    $show=header("location:home.php");
    
}
echo $show;
?>