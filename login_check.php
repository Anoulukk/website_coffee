<?php
include 'config.php';
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$Password = hash('sha512', $password);
print_r($Password);
$sql = "SELECT * FROM customer WHERE cus_firstname = '$username' AND password = '$Password'";

$result=mysqli_query($conn_db,$sql);
$row=mysqli_fetch_array($result);
if($row > 0 ){
    $_SESSION["cus_id"]=$row['customer_id'];
    $_SESSION["cus_firstname"]=$row['cus_firstname'];
    $_SESSION["cus_lastname"]=$row['cus_lastname'];
    $_SESSION["cus_email"]=$row['email'];
    $_SESSION["cus_password"]=$row['password'];
    $show=header("location:home.php");
    $_SESSION['error']="";
}else{
    $_SESSION['error']= "<p> your username or password is invalid </p>";
    $show=header("location:login.php");
    
}
echo $show;
?>