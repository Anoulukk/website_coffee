<title>Document</title>
<?php
include('footerheader.php');
include('config.php'); ?>
<link rel="stylesheet" href="style.css">



<body>
    <div class="container">
        <div class="row">
            <?php

            $sql = "SELECT p.*, c.id AS category_id, c.parent_id, c.name AS category_name
            FROM product p
            JOIN category c ON p.parent_id = c.parent_id";



            $result = mysqli_query($conn_db, $sql);
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-3 box">

                    <div class="img">
                        <img src="img/<?php echo $row['picture'] ?>" alt="">
                    </div>

                    <div class="product_name">
                        <?php echo $row['p_name'] ?>
                    </div>
                    <div class="parent">
                        <?php echo $row['category_name'] ?>
                    </div>
                    <div class="price">
                        ລາຄາ <?php echo number_format($row['price']) ?> ກີບ
                    </div>

                    <div class="button">
                        <a href="cart.php?id=<?= $row['id'] ?>" class="btn btn-outline-primary">buy</a>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>

    <script src="script.js"></script>


</body>
<footer>
<ul>


</body>
<li><a href="#">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Our Service</a></li>
<li><a href="#">Our Product</a></li>
<li><a href="#">Contact Us</a></li>

<li><a href="https://www.facebook.com/" i class="fa-brands fa-facebook fa-2xl" style="color: #1877f2;"></i></a></li> 
<li><a href="https://www.tiktok.com/"i class="fa-brands fa-tiktok fa-2xl" style="color: #000000;"></i></a></li>
<li><a href="https://www.instagram.com/"i class="fa-brands fa-instagram fa-2xl"></i></a></li>

</ul>
</footer>