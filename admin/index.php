<?php
session_start();
if(!isset($_SESSION["cus_id"])){
    $show=header("location:login.php");
}else{
    $show=header("location:report_order.php");

}
print_r($_SESSION["cus_id"]);
?>
<button><a href="logout.php"> logout</a></button>