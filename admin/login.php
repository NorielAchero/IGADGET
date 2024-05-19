<?php
session_start();

$valid_username = "admin123";//Lol this is vulnerable
$valid_password = "admin123";

$gelo_username = "forever";
$gelo_password = "jmXsharon<3";

$noy_username = "RonanSoriano";
$noy_password = "roseandkaryle";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username == $valid_username && $password == $valid_password) {
        // Store user information in session and redirect to admin page
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit;
    }
    else if($username == $gelo_username && $password == $gelo_password) {
        // Store user information in session and redirect to admin page
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit;
    } 
    else if($username == $noy_username && $password == $noy_password) {
        // Store user information in session and redirect to admin page
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit;
    }else {
        // Invalid credentials, redirect back to login page with error message
        header("Location: index.php?error=1");
        exit;
    }
}
?>
