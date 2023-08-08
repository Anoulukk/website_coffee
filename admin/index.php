<?php
session_start();
if(!isset($_SESSION["emp_id"])){
    $show=header("location:login.php");
}else{
    $show=header("location:report_order.php");

}
print_r($_SESSION["emp_id"]);
?>
<button><a href="logout.php"> logout</a></button>