<?php
session_start();
require_once('dbconnect.php');
$query = "SELECT * FROM website_data WHERE Username=? AND Email=?";
$stmt = mysqli_prepare($dbconnect, $query);
if (!$stmt){
    die("prepare failed: " .mysqli_error($dbconnect));
}
$username = $_POST['username'];
$email = $_POST['email'];
mysqli_stmt_bind_param($stmt, "ss", $username, $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if (mysqli_num_rows($result) == 1) {
    // Start session and store user information
    $_SESSION["username"] = $username;

    // Redirect to dashboard or homepage
    header("Location: home3.php");
    exit();
} else {
    $error = "Invalid username or password.";
}

?>