<?php
session_start();
include 'config.php';
$sql="SELECT * from tb_order where order_id= '". $_SESSION["order_id"] . "' ";
$result= mysqli_query($conn_db,$sql);
$rs=mysqli_fetch_array($result);
$total_price=$rs['total_price'];
$sumprice1=number_format($total_price);

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <script src="./bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <title>ລາຍການສັ່ງຊື້</title>
</head>
<body>
    <div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="alert alert-success h4 text-center mt-4" role="alert">
  ການສັ່ງຊື້ສຳເລັດແລ້ວ
</div>
    ເລກທີການສັ່ງຊື້: <?=$rs['order_id'];?> <br>
    ຊື່ ແລະ ນາມສະກຸນ (ລູກຄ້າ): <?=$rs['cus_name'];?> <br>
    ທີ່ຢູ່ຈັດສົ່ງສິນຄ້າ:<?=$rs['address'];?> <br>
    ເບິໂທລະສັບ: <?=$rs['telephone'];?> <br><br>
    <div class="card mb-4 mt-2">
        <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th>ລະຫັດສິນຄ້າ</th>
      <th>ຊື່ສິນຄ້າ</th>
      <th>ລາຄາ</th>
      <th>ຈຳນວນທີ່ສັ່ງຊື້</th>
      <th>ລາຄາລວມ</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
$sql8="SELECT * from order_bill d,product p WHERE d.pro_id = p.pro_id AND d.order_id = '". $_SESSION["order_id"] . "' ";
$result8= mysqli_query($conn_db,$sql8);
$sumprice=0;
while($row=mysqli_fetch_array($result8)){ ;
    $sumprice += $row['total'];
  ?>
    <tr>
      <td><?=$row['pro_id']?></td>
      <td><?=$row['pro_name']?></td>
      <td><?=number_format($row['price'])?></td>
      <td><?=$row['qty']?></td>
      <td><?=number_format($row['total'])?></td>
    </tr>
  </tbody>
  <?php
}
  ?>
</table>

<h6 class="text-end">ລວມເປັນເງີນ <?=number_format($sumprice)?>ກີບ</h6>
</div>
</div>
</div>


</div>
<div class="text-center">
***ກະລຸນາກົດປຸ່ມ Print ເພີ່ອບັນທຶກອໍເດີ້ຂອງທ່ານ***
<br><br>

<button onclick="captureA()" class="btn btn-warning">print</button>

</div>
  </div>


</body>
<script>
  // (A) USING HTML2CANVAS
function captureA () {
  html2canvas(document.body).then(canvas => {
    let a = document.createElement("a");
    a.download = "myorder.png";
    a.href = canvas.toDataURL("image/png");
    a.click(); // MAY NOT ALWAYS WORK!
  });
}
var btna=document.getElementById('btna');
btna.addEventListener('click',function(e){
    e.preventDefault()
    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
    var address=document.getElementById('address').value;
    var message=document.getElementById('message').value;
    var body='name:'+name+'<br/> email:'+email+'<br/> address :'+address+'<br/> message:'+message;
    swal("Success", "send information to coffee shop success", "success");
    
    Email.send({
    Host : "smtp.elasticemail.com",
    Username : "tarcoinbit@gmail.com",
    Password : "725433D77FD5782421713333FA3E5E20B8B3",
    To : 'tinartiktok1@gmail.com',
    From :"tarcoinbit@gmail.com",
    Subject : address,
    Body : body
    
   
})
})
</script>
</html>