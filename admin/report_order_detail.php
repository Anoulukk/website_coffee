<?php
session_start();
if(!isset($_SESSION["cus_id"])){
    $show=header("location:login.php");
}
?>
<?php include('config.php'); 
$ids=$_GET['id']?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard -  Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-4">

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                ລາຍການສິນຄ້າຕາມໃບສັ່ງຊື້
                                <div>
                                    <br>
                                <a href="report_order.php"><button type="button" class="btn btn-outline-success">ກັບສູ່ໜ້າຫຼັກ</button></a>
                               </div>
                               
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                <h5>ເລກທີ່ໃບສັ່ງຊື້ : <?=$ids?></h5>    
                                <thead>
                                        <tr>
                                            <th>ລະຫັັດສິນຄ້າ</th>
                                            <th>ຊື່ສິນຄ້າ</th>
                                            <th>ລາຄາ</th>
                                            <th>ຈຳນວນ</th>
                                            <th>ລາຄາລວມ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 

$sql="SELECT * FROM tb_order t, order_bill d, product p WHERE t.order_id=d.order_id
AND d.pro_id=p.pro_id AND d.order_id='$ids'
order by d.pro_id DESC ";
$sum_total=0;
$cus_name="";
$result=mysqli_query($conn_db,$sql);
while($row = mysqli_fetch_array($result)){
    $sum_total+=$row['total'];
    $cus_name=$row['cus_name'];
?>
                                        <tr>
                                            <td><?=$row['id']?></td>
                                            <td><?=$row['pro_name']?></td>
                                            <td><?=$row['total_price']?></td>
                                            <td><?=$row['qty']?></td>
                                            <td><?=$row['total']?> $</td>
               
                                          
                                     <?php
                                     } 
                               mysqli_close($conn_db);
                                    ?>
                                        </tr> 
                                    </tbody>
                                    <b>ຊື່ລູກຄ້າ : <?=$cus_name?></b>
<br>
                                    <b>ລາຄາລວມ : <?=number_format($sum_total)?>ກີບ</b>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

