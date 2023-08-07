<?php include('config.php'); ?>
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
                                ສະແດງຂໍ້ມູນການສັ່ງຊື້ສິນຄ້າ (ຍັງບໍ່ທັນຈ່າຍ)
                                <div>
                                    <br>
                                <a href="report_order_yes.php"><button type="button" class="btn btn-outline-success">ຈ່າຍແລ້ວ</button></a>
                                <a href="report_order.php"><button type="button" class="btn btn-outline-success">ຍັງບໍ່ທັນຈ່າຍ</button></a>
                                </div>
                                <br>
                                <div>
                                    <form action="report_order.php" name="form1" method="POST" >
                                    <div class="row">


  </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ເລກທີ່ໃບສັ່ງຊື້</th>
                                            <th>ລູກຄ້າ</th>
                                            <th>ທີ່ຢູ່ຈັດສົ່ງສິນຄ້າ</th>
                                            <th>ເບີໂທ</th>
                                            <th>ລາຄາລວມ</th>
                                            <th>ວັນທີສັ່ງຊື້</th>
                                            <th>ສະຖານະການສັ່ງຊື້</th>
                                            <th>ລາຍລະອຽດ</th>
                                            <th>ປັບສະຖານະການສັ່ງຊື້</th>
                                        </tr>
  
                                    <tbody>
<?php 

$sql="SELECT * FROM tb_order WHERE order_status='1' order by reg_date DESC ";
$result=mysqli_query($conn_db,$sql);
while($row = mysqli_fetch_array($result)){
    $status = $row['order_status'];
?>
                                        <tr>
                                            <td><?=$row['order_id']?></td>
                                            <td><?=$row['cus_name']?></td>
                                            <td><?=$row['address']?></td>
                                            <td><?=$row['telephone']?></td>
                                            <td><?=$row['total_price']?> $</td>
                                            <td><?=$row['reg_date']?></td>
                                            <td>
                                                <?php
                                                if($status == 0){
                                                    echo "<b style='color:red'>ຍົກເລີກການສັ່ງຊື້ </b>";
                                                }else if($status == 1){
                                                    echo "ຍັງບໍ່ທັນຈ່າຍ";
                                                }else if($status == 2){
                                                    echo "<b style='color:blue'>ຈ່າຍແລ້ວ</b>";
                                                }
                                                ?>

                                            </td>
                                            <td><a href="report_order_detail.php?id=<?=$row['order_id']?>" class="btn btn-success">ລາຍລະອຽດ</a></td>

                                            <td><a href="pay_order.php?id=<?=$row['order_id']?>" class="btn btn-warning" 
                                            onclick="del1(this.href); return false;">ປັບສະຖານະ</a></td>

                          
                                             <?php
                                     } 
                               mysqli_close($conn_db);
                                    ?>
                                        </tr> 
                                    </tbody>
                                    
                                   
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

<script>
    function del(mypage){
        var agree=confirm('ເຈົ້າຕ້ອງການຍົກເລີກໃບສັ່ງຊື້ສິນຄ້າ ຫຼື ບໍ່?');
        if(agree){
            window.location=mypage;
        }
    }
    function del1(mypage1){
        var agree=confirm('ເຈົ້າຕ້ອງການປັບສະຖານະການສັ່ງຊື້ ຫຼື ບໍ່?');
        if(agree){
            window.location=mypage1;
        }
    }
</script>