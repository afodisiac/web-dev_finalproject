<?php
$dbhostserver = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbusername = "afodisiac_clothing";

$dbconnect = mysqli_connect($dbhostserver,$dbuser,$dbpassword,$dbusername);

if (!$dbconnect){
    die("coonection failed:".mysqli_connect_error());
}
else{
    echo "you are becoming good at this coding shit";
}
?>