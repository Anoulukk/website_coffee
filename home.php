<title>Document</title>
<?php
include('footerheader.php');
include('config.php'); 
?>
<link rel="stylesheet" href="style.css">



<body>
    <div class="container" >
        <div class="row">
            <?php



if (isset($_POST['btn'])) {
    $data = $_POST['txt_search'];
    header("location:search.php?keyword=$data");
} else {
    $sql = "SELECT p.parent_id, p.pr_name AS parent_name, 
pr.pro_id, pr.pro_name, pr.price, pr.stock, pr.picture, pr.description
FROM parent p
JOIN product pr ON p.parent_id = pr.parent_id
WHERE p.parent_id = 1";

}

            $result = mysqli_query($conn_db, $sql);
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-3 box">
                    
                <div class="img">
            <img src="img/<?php echo $row['picture'] ?>" alt="Image" class="hover-image">
            <div class="image-description"><?php echo $row['description'] ?></div>
          </div>

                    <div class="product_name">
                        <?php echo $row['pro_name'] ?>
                    </div>
                    <div class="parent">
                        <?php echo $row['parent_name'] ?>
                    </div>
                    <div class="price">
                        ລາຄາ
                        <?php echo number_format($row['price']) ?> ກີບ
                    </div>

                    <div class="button">
                        <a href="cart.php?id=<?= $row['pro_id'] ?>" class="btn btn-custom">buy</a>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php

            $sql = "SELECT p.parent_id, p.pr_name AS parent_name, 
pr.pro_id, pr.pro_name, pr.price, pr.stock, pr.picture, pr.description
FROM parent p
JOIN product pr ON p.parent_id = pr.parent_id
WHERE p.parent_id = 1";



            $result = mysqli_query($conn_db, $sql);
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-3 box">
                    
                <div class="img">
            <img src="img/<?php echo $row['picture'] ?>" alt="Image" class="hover-image">
            <div class="image-description"><?php echo $row['description'] ?></div>
          </div>

                    <div class="product_name">
                        <?php echo $row['pro_name'] ?>
                    </div>
                    <div class="parent">
                        <?php echo $row['parent_name'] ?>
                    </div>
                    <div class="price">
                        ລາຄາ
                        <?php echo number_format($row['price']) ?> ກີບ
                    </div>

                    <div class="button">
                        <a href="cart.php" class="btn btn-custom">buy</a>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>

    <script src="script.js"></script>


</body><br>
<div class="flex">
    <li><a href="home.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="service.php">Our Service</a></li>
    <li><a href="coffee.php">Our Product</a></li>
    <li><a href="contact.php">Contact Us</a></li>

    <li><a href="https://www.facebook.com/" i class="fa-brands fa-facebook fa-xl" ></i></a></li> 
<li><a href="https://www.tiktok.com/"i class="fa-brands fa-tiktok fa-xl" ></i></a></li>
<li><a href="https://www.instagram.com/"i class="fa-brands fa-instagram fa-xl"></i></a></li>

    </ul>
</div>