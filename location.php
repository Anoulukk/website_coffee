<?php
session_start();

// Check if the user is logged in (you should implement this logic based on your backend)
$logged_in = isset($_SESSION["cus_firstname"]);

if (!$logged_in) {
    header("Location: login.php");
    exit;
}
?>