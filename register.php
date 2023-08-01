<?php 
  include ('config.php');
  include('footerheader.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-sm" id="register-container">
    <div class="register-container">
        <div class="row text-center">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <h5>Register</h5>

                <form id="form" class="form" method="POST">
                    <div class="form-control">
                        <label for="username">username</label>
                        <input type="" name="username" id="username" placeholder="Enter your username">
                        <small>eror message</small>
                    </div>
                    
                    <div class="form-control">
                        <label for="lastname">lastname</label>
                        <input type="" name="lastname" id="lastname" placeholder="Enter your lastname">
                        <small>eror message</small>
                    </div>
                    <div class="form-control ">
                        <label for="Email">Email</label>
                        <input type="" name="email" id="email" placeholder="Enter your Email">
                        <small>eror message</small>
                    </div>
                    <div class="form-control ">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                        <small>eror message</small> 
                    </div>
                    <div class="form-control ">
                        <label for="confirm password">confirm password</label>
                        <input type="password" name="re-password" id="re-password" placeholder="confirm password">
                        <small>eror message</small>

                    </div>
            <button type="submit">ลงทเบียน</button>

                    <button type="submit" name="submit" value="register" class="btn btn-outline-primary">register</button>

                    

                </form>
                
  <?php 
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
    } else {
        echo "Error: " . $sql . "<br>" . $conn_db->error;
    }
}

$conn_db->close();
?>
            </div>

        </div>
    </div>
</div>
<script src="script.js"></script>

</body>
</html>
