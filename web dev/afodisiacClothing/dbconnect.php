<?php
$dbhostserver = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "afodisiac_clothing";

$dbconnect = mysqli_connect($dbhostserver,$dbuser,$dbpassword,$dbname);

if (!$dbconnect){
    die("coonection failed:".mysqli_connect_error());
}
// else{
//     echo "you are becoming good at this coding shit";
// }
?>