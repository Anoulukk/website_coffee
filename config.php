<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "shop_coffee";

$conn_db = mysqli_connect($servername, $username, $password, $databaseName);
mysqli_query($conn_db, "SET CHARACTER SET 'utf8'");
mysqli_query($conn_db, "SET SESSION collation_connection = 'utf8_unicode_ci'");

if($conn_db->connect_error){
    die("Connect Error : ".$conn_db->connect_error);
}else{
    // echo "connect database success!!!";
}

?>