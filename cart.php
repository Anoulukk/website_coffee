<?php
include('config.php');
include('footerheader.php');
?>
<link rel="stylesheet" href="style.css">



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
                                    ລາຄາ
                                    <?php echo number_format($row['price']) ?> ກີບ
                                </div>

                                <div class="button">
    <a href="cart.php?id=<?= $row['pro_id'] ?>" class="btn btn-custom" data-bs-toggle="modal" onclick="addToCart('<?php echo $row['pro_name']; ?>', <?php echo $row['price']; ?>)">buy now</a>
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
                                    ລາຄາ
                                    <?php echo number_format($row['price']) ?> ກີບ
                                </div>


                                <div class="button">
    <a href="cart.php?id=<?= $row['pro_id'] ?>" class="btn btn-custom" data-bs-toggle="modal" onclick="addToCart('<?php echo $row['pro_name']; ?>', <?php echo $row['price']; ?>)">buy now</a>
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
                                    ລາຄາ
                                    <?php echo number_format($row['price']) ?> ກີບ
                                </div>

                                <div class="button">
    <a href="cart.php?id=<?= $row['pro_id'] ?>" class="btn btn-custom" data-bs-toggle="modal" onclick="addToCart('<?php echo $row['pro_name']; ?>', <?php echo $row['price']; ?>)">buy now</a>
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
    <div class="modal" tabindex="-1" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enter your address
                    </h5>
                    <p class="modal-title">(please verify that you are logged in)</p>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="order_bill.php" method="post">
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" name="address" id="address" required>
      </div>
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
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-custom">Submit Order</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
 <script>
  var cartItemsData = {};

// Function to add items to the cart
function addToCart(productName, price) {
    // Check if the product is already in the cart
    if (cartItemsData[productName]) {
        cartItemsData[productName].quantity += 1;
    } else {
        cartItemsData[productName] = {
            price: price,
            quantity: 1,
        };
    }

    // Update the cart box content
    updateCartBoxContent();

    var cartBoxContainer = document.getElementById('cartBoxContainer');
    cartBoxContainer.style.display = 'block'; // Show the cart box when the first item is added
}

    // Function to update the cart box content
    function updateCartBoxContent() {
        var cartItems = document.getElementById('cartItems');
        cartItems.innerHTML = '';

        var total = 0;
        var tableContent = '<tr><th>Product Name</th><th>Price</th><th>Quantity</th><th></th></tr>';

        for (var productName in cartItemsData) {
            var row = `
                <tr>
                    <td>${productName}</td>
                    <td>${cartItemsData[productName].price} ກີບ</td>
                    <td>${cartItemsData[productName].quantity}</td>
                    <td>
                        <button onclick="decreaseQuantity('${productName}')">-</button>
                        <button onclick="removeFromCart('${productName}')">Remove</button>
                    </td>
                </tr>`;
            tableContent += row;
            total += cartItemsData[productName].price * cartItemsData[productName].quantity;
        }

        cartItems.innerHTML = tableContent;

        // Display the total price
        var totalPriceElement = document.getElementById('totalPrice');
        totalPriceElement.innerHTML = `Total Price: ${formatPrice(total)} ກີບ`;
    }

    // Function to format the price with commas for thousands separators
    function formatPrice(price) {
        return price.toLocaleString('en-US');
    }

// Function to decrease the quantity of a product in the cart
function decreaseQuantity(productName) {
    if (cartItemsData[productName].quantity > 1) {
        cartItemsData[productName].quantity -= 1;
        updateCartBoxContent();
    }
}

// Function to remove a product from the cart
function removeFromCart(productName) {
    delete cartItemsData[productName];
    updateCartBoxContent();
}
    // Function to hide the cart container
    function hideCartContainer() {
        var cartBoxContainer = document.getElementById('cartBoxContainer');
        cartBoxContainer.style.display = 'none';
    }

    </script>
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