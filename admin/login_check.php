<?php
include 'config.php';
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
#ເຂົ້າ password ໂດຍໃຊ້ sha512

$sql="SELECT * FROM tb_employee WHERE username='$username' and password = '$password'";
$result=mysqli_query($conn_db,$sql);
$row=mysqli_fetch_array($result);
if($row > 0 ){
    $_SESSION["emp_username"]=$row['username'];
    $_SESSION["emp_password"]=$row['password'];
    $_SESSION["emp_id"]=$row['id'];
    $_SESSION["emp_firstname"]=$row['name'];
    $_SESSION["emp_lastname"]=$row['lastname'];
    $show=header("location:report_order.php");
    $_SESSION['error']="";
}else{
    $_SESSION['error']= "<p> your username or password is invalid </p>";
    $show=header("location:login.php");

}
echo $show;
?>