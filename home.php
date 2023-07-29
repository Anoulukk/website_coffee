
    <title>Document</title>
    <?php include('footerheader.php');?>
    
</head>

<body>
<?php
include('config.php');?>
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
                        <a href="d_product.php?id=<?=$row['id']?>" class="btn btn-outline-primary">details</a>
                    </div>
                </div>
            <?php } ?>


        </div>
    </div>

<script src="script.js"></script>

</body>
</html>
