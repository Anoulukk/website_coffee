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
<<<<<<< HEAD
    $sql = "SELECT p.*, c.parent_id AS category_id, c.parent_id, c.pr_name AS category_name
    FROM product p
    JOIN parent c ON p.parent_id = c.parent_id";
=======
   

>>>>>>> b9d33b340cdf934474754e5d0022c6b330785a91
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
                        <a href="cart.php?id=<?= $row['pro_id'] ?>" class="btn btn-outline-primary">buy</a>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
    

    <script src="script.js"></script>


</body>
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