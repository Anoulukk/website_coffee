<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // Extract other properties as needed
    $password=hash('sha512',$password);
    
    // Insert the data into the database
    $sql = "INSERT INTO `customer`(`customer_id`, `cus_firstname`, `cus_lastname`, `email`, `password`) VALUES
                                 ('','$username','$lastname','$email','$password')";
    // Modify the SQL query as per your database table structure and data

    if ($conn_db->query($sql) === TRUE) {
        //echo "Registration successful!";
    $show=header("location:login.php");
    echo $show;


    } else {
        echo "Error: " . $sql . "<br>" . $conn_db->error;
    }
}

$conn_db->close();
?>