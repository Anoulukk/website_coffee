<?php
include('config.php');
// $data = $_GET['data'];

// Retrieve data
if (isset($_GET['data'])) {
    $data = $_GET['data'];
    $dataArray = json_decode($data, true);
    $username = $dataArray['username'];
    $lastname = $dataArray['lastname'];
    $email = $dataArray['email'];
    $password = $dataArray['password1'];

    
// change password number to hash code sha512
        $hashedPassword = hash('sha512', $password);
    
        // Insert the data into the database
        $sql = "INSERT INTO `customer` (`customer_id`, `cus_firstname`, `cus_lastname`, `email`, `password`) VALUES
                ('', '$username', '$lastname', '$email', '$hashedPassword')";
    
        if ($conn_db->query($sql) === TRUE) {
            header("Location: login.php");
        exit();
        } else {
            $response = array('status' => 'error', 'message' => 'Error: ' . $sql . "<br>" . $conn->error);
            echo json_encode($response);
        }
    }
    // close connect to database
    $conn_db->close();

?>
