<body>

    <?php
    include('config.php');
    include('footerheader.php'); ?>
    <div class="container">


        <div class="row">

            <?php
            // Get the search keyword from the URL parameter
            $datas = $_GET['keyword'];
            // SQL query to retrieve products matching the search keyword
            $select_pro = "SELECT p.cate_id, p.cate_name AS cate_name, 
            pr.pro_id, pr.pro_name, pr.price, pr.stock, pr.picture, pr.description
            FROM category p
            JOIN product pr ON p.cate_id = pr.cate_id
            WHERE pr.pro_name LIKE '$datas%'ORDER BY pro_name DESC";
            // Handle form submission for search
            if (isset($_POST['btn'])) {
                $data = $_POST['txt_search'];
                header("location:search.php?keyword=$data");
            }

            $result = mysqli_query($conn_db, $select_pro);
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
                        <?php echo $row['cate_name'] ?>
                    </div>
                    <div class="price">
                        ລາຄາ <?php echo number_format($row['price']) ?> ກີບ
                    </div>
                    <!-- Button to buy the product (linked to cart page) -->
                    <div class="button">
                        <a href="cart.php" class="btn btn-custom">buy</a>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>
</body>