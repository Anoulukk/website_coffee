<?php 
include 'config.php';
$ids=$_GET['id'];

$sql="UPDATE tb_order SET order_status = 2 WHERE order_id='$ids' ";
$result=mysqli_query($conn_db,$sql);
$sql2="UPDATE order_bill SET shipdate = NOW(),`status_id`=2 WHERE order_id='$ids' ";
$result=mysqli_query($conn_db,$sql2);
if($result){

    echo "<script>window.location='report_order.php'; </script>";
}else{
    echo "<script>alert('ບໍ່ສາມາດລົບຂໍ້ມູນໄດ້'); </script>";
}

mysqli_close($conn_db);
?>