<?php
include('config.php');
include('footerheader.php');
?>
<link rel="stylesheet" href="style.css">
<style>
    .modal.show #cartBoxContainer {
        display: none !important;
    }
</style>



<body>
    
    <div class="container text-center" id="button1">

        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col"><br>
                                    <a href="#button1" button type="button" class="btn btn-outline-secondary">Coffee</button></a>
                                </div>
                                <div class="col"><br>
                                    <a href="#button2" button type="button" class="btn btn-outline-secondary">Cookie</button></a>
                                </div>
                                <div class="col"><br>
                                    <a href="#button3" button type="button" class="btn btn-outline-secondary">Cake</button></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        

                        $sql = "SELECT p.parent_id, p.pr_name AS parent_name, 
pr.pro_id, pr.pro_name, pr.price, pr.stock, pr.picture, pr.description
FROM parent p
JOIN product pr ON p.parent_id = pr.parent_id
WHERE p.parent_id = 1";




                        $result = mysqli_query($conn_db, $sql);
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
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
                                    ລາຄາ
                                    <?php echo number_format($row['price']) ?> ກີບ
                                </div>

                                <div class="button">
                                    <a href="cart.php" class="btn btn-custom" data-bs-toggle="modal" onclick="addToCart('<?php echo $row['pro_name']; ?>', '<?php echo $row['price']; ?>','<?php echo $row['pro_id'] ?>',<?php echo $row['stock'] ?>)">add to cart</a>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
            <div class="col">
                <div class="cart-box-container" id="cartBoxContainer" style="display:none;">
                    <h2>Cart</h2>
                    <div class="cart-items">
                        <table class="cart-table">
                            <thead>

                            </thead>
                            <tbody id="cartItems"></tbody>
                        </table>
                    </div><br>
                    <div id="totalPrice"></div><br>
                    <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="hideCartContainer()">Check Out</button>

                </div>
            </div>
        </div>
    </div>


    <div class="container text-center" id="button2">

        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col"><br>
                                    <a href="#button1" button type="button" class="btn btn-outline-secondary">Coffee</button></a>
                                </div>
                                <div class="col"><br>
                                    <a href="#button2" button type="button" class="btn btn-outline-secondary">Cookie</button></a>
                                </div>
                                <div class="col"><br>
                                    <a href="#button3" button type="button" class="btn btn-outline-secondary">Cake</button></a>
                                </div>
                            </div>
                        </div>
                        <?php

                        $sql = "SELECT p.parent_id, p.pr_name AS parent_name, 
pr.pro_id, pr.pro_name, pr.price, pr.stock, pr.picture, pr.description
FROM parent p
JOIN product pr ON p.parent_id = pr.parent_id
WHERE p.parent_id = 2";




                        $result = mysqli_query($conn_db, $sql);
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
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
                                    ລາຄາ
                                    <?php echo number_format($row['price']) ?> ກີບ
                                </div>


                                <div class="button">
                                    <a href="cart.php" class="btn btn-custom" data-bs-toggle="modal" onclick="addToCart('<?php echo $row['pro_name']; ?>', '<?php echo $row['price']; ?>','<?php echo $row['pro_id'] ?>',<?php echo $row['stock'] ?>)">add to cart</a>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
    <div class="container text-center" id="button3">

        <div class="row">
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col"><br>
                                    <a href="#button1" button type="button" class="btn btn-outline-secondary">Coffee</button></a>
                                </div>
                                <div class="col"><br>
                                    <a href="#button2" button type="button" class="btn btn-outline-secondary">Cookie</button></a>
                                </div>
                                <div class="col"><br>
                                    <a href="#button3" button type="button" class="btn btn-outline-secondary">Cake</button></a>
                                </div>
                            </div>
                        </div>

                        <?php

                        $sql = "SELECT p.parent_id, p.pr_name AS parent_name, 
pr.pro_id, pr.pro_name, pr.price, pr.stock, pr.picture, pr.description
FROM parent p
JOIN product pr ON p.parent_id = pr.parent_id
WHERE p.parent_id = 3";




                        $result = mysqli_query($conn_db, $sql);
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {

                        ?>
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
                                    ລາຄາ
                                    <?php echo number_format($row['price']) ?> ກີບ
                                </div>

                                <div class="button">
                                    <a href="cart.php" class="btn btn-custom" data-bs-toggle="modal" onclick="addToCart('<?php echo $row['pro_name']; ?>', '<?php echo $row['price']; ?>','<?php echo $row['pro_id'] ?>',<?php echo $row['stock'] ?>)">add to cart</a>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
            <div class="col">

            </div>

        </div>
    </div>
    <div  class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true" tabindex="-1" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enter your address
                    </h5>
                    <p class="modal-title">(please verify that you are logged in)</p>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="showCartContainer()"></button>
                </div>
                <div class="modal-body">
                    <form action="order_bill.php" method="post" >

                        <div class="form-group">
                            <label for="street">Street:</label>
                            <input type="text" class="form-control" name="street" id="street" required>
                        </div>
                        <div class="form-group">
                            <label for="street_line">Street Line:</label>
                            <input type="text" class="form-control" name="street_line" id="street_line" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province:</label>
                            <input type="text" class="form-control" name="province" id="province" required>
                        </div>
                        <div class="form-group">
                            <label for="district">District:</label>
                            <input type="text" class="form-control" name="district" id="district" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="total" id="total" required hidden>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="quantity" id="quantity" required hidden>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="proname" id="proname" required hidden>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="pro_id" id="pro_id" required hidden>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="price" id="price" required hidden>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal" onclick="showCartContainer()">Close</button>
                    <button type="submit" class="btn btn-custom" >Submit Order</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
<script src="script.js"></script>
<div class="flex">
    <li><a href="home.php">Home</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="service.php">Our Service</a></li>
    <li><a href="coffee.php">Our Product</a></li>
    <li><a href="contact.php">Contact Us</a></li>

    <li><a href="https://www.facebook.com/" i class="fa-brands fa-facebook fa-xl"></i></a></li>
    <li><a href="https://www.tiktok.com/" i class="fa-brands fa-tiktok fa-xl"></i></a></li>
    <li><a href="https://www.instagram.com/" i class="fa-brands fa-instagram fa-xl"></i></a></li>

    </ul>
</div>