
<?php include('footerheader.php');?>

<body>

    <?php
    include('config.php');
    include('footerheader.php'); ?>
    <div class="container">


        <div class="row">
            <?php
            $datas = $_GET['keyword'];
            $select_pro = "SELECT p.parent_id, p.pr_name AS parent_name, 
            pr.pro_id, pr.pro_name, pr.price, pr.stock, pr.picture, pr.description
            FROM parent p
            JOIN product pr ON p.parent_id = pr.parent_id
            WHERE pr.pro_name LIKE '$datas%'ORDER BY pro_name DESC";
            
             if (isset($_POST['btn'])) {
                $data = $_POST['txt_search'];
                header("location:search.php?keyword=$data");
            }


            $result = mysqli_query($conn_db, $select_pro);
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-3 box">
                    <div class="img">
                        <img src="img/<?php echo $row['picture'] ?>" alt="">
                    </div>
                    <div class="product_name">
                        <?php echo $row['pro_name'] ?>
                    </div>
                    <div class="parent">
                        <?php echo $row['parent_name'] ?>
                    </div>
                    <div class="price">
                        ລາຄາ <?php echo $row['price'] ?> ກີບ
                    </div>

                    <div class="button">
                        <a href="cart.php" class="btn btn-primary">buy</a>
                    </div>
                </div>
            <?php } ?>


            <!-- <div class="col-3">A</div>
        <div class="col-3">B</div>
        <div class="col-3">C</div>
        <div class="col-3">D</div> -->
        </div>
    </div>
</body>

