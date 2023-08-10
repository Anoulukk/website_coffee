<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
// change password number to hash code sha512
    $Password = hash('sha512', $password);
// check username and password 
    $sql = "SELECT * FROM customer WHERE cus_firstname = '$username' AND password = '$Password'";
    $result = mysqli_query($conn_db, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
 // make session
        $_SESSION["cus_id"] = $row['customer_id'];
        $_SESSION["cus_firstname"] = $row['cus_firstname'];
        $_SESSION["cus_lastname"] = $row['cus_lastname'];
        $_SESSION["cus_email"] = $row['email'];
        $_SESSION["cus_password"] = $row['password'];
        $_SESSION['logged_in'] = true; // Set the logged_in session variable to true

        header("location: home.php");
        exit;
    } else {
        $_SESSION['error'] = "<p> Your username or password is invalid </p>";
        header("location: login.php");
        exit;
    }
}
?>
