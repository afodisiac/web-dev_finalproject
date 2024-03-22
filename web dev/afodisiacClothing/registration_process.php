<?php
require_once("dbconnect.php");
$query = "INSERT INTO website_data (Firstname,Secondname,  	Username, 	Email, PhoneNumber) VALUES (?, ?, ?, ?,?)";

$stmt = mysqli_prepare($dbconnect,$query);
if (!$stmt){
    die("prepare failed: " .mysqli_error($dbconnect));
}
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phoneNo'];
mysqli_stmt_bind_param($stmt,"sssss", $firstname,$secondname, $username, $email,$phonenumber);

if(mysqli_stmt_execute($stmt)){
    header("Location: ./home3.php");
}
else{
    die("Execute failed: ".mysqli_error($dbconnect));
}
?>