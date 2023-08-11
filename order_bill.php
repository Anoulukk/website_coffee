<?php
session_start();
include('config.php');

// Check if the user is logged in (you should implement this logic based on your backend)
$logged_in = isset($_SESSION["cus_firstname"]);
$customer_id = $_SESSION["cus_id"];
$street = $_POST['street'];
$street_line = $_POST['street_line'];
$province = $_POST['province'];
$district = $_POST['district'];
$phone = $_POST['phone'];
$quantityArray = explode(",", $_POST['quantity']); // Convert comma-separated string to an array
$pronameArray = explode(",", $_POST['proname']); // Convert comma-separated string to an array
$pro_idArray = explode(",", $_POST['pro_id']); // Convert comma-separated string to an array
$priceArray = explode(",", $_POST['price']); // Convert comma-separated string to an array

  // // Get the form data
  $totalPrice = $_POST['total'];
  $quantity = $_POST['quantity'];

// if user is not login let direct to login page
if (!$logged_in) {
    header("Location: login.php");
    exit;
}
//insert data to tb_order for collect sales data
$sql="INSERT INTO tb_order(order_id,cus_name,address,telephone,total_price,order_status)
values('','". $_SESSION["cus_firstname"] ."','$street ','$phone','$totalPrice   ','1')";
mysqli_query($conn_db,$sql);
// insert the order_id
$order_id = mysqli_insert_id($conn_db);
$_SESSION["order_id"] = $order_id;
// Insert the shipping address into the address table
$insertAddressQuery = "INSERT INTO `address` (`address_id`, `customer_id`, `street`, `street_line`, `province`, `district`, `phone`)
VALUES (NULL, '$customer_id', '$street', '$street_line', '$province', '$district', '$phone')";

if (mysqli_query($conn_db, $insertAddressQuery)) {
    // Get the address_id of the newly inserted address
    $addressId = mysqli_insert_id($conn_db);

    // Insert the order details into the order_bill table along with the address_id and ChargeDate
    $insertOrderQuery = "INSERT INTO `order_bill` (`id`, `order_id`, `pro_id`, `customer_id`, `price`, `qty`, `total`, `address_id`, `ChargeDate`,`shipdate`, `status_id`)
    VALUES ";
    $values = array();
    for ($i = 0; $i < count($pronameArray); $i++) {
        $pro_id = $pro_idArray[$i];
        $price = $priceArray[$i];
        $qty = $quantityArray[$i];
        $totalPrice = $price * $qty;
        $values[] = "('', '" .$_SESSION["order_id"]. "', '$pro_id', '$customer_id', '$price', '$qty', '$totalPrice', '$addressId', NOW(),NULL, 1)";
    }
    $insertOrderQuery .= implode(',', $values);

    if (mysqli_query($conn_db, $insertOrderQuery)) {
        // Order placed successfully
        for ($i = 0; $i < count($pronameArray); $i++) {
       $sql3="update product set stock=stock -'$quantityArray[$i]'
            WHERE pro_id=' $pro_idArray[$i]'";
            mysqli_query($conn_db,$sql3);

        echo "Order inserted successfully!";
        echo "<script> window.location='orderbill_print.php';</script>";
    } 
    }else {
        // Error occurred while inserting order
        echo "Error: " . mysqli_error($conn_db);
}
} else {
    // Error occurred while inserting shipping address
    echo "Error: " . mysqli_error($conn_db);
}

?>
