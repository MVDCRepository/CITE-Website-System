<?php 
//db info
$serveName = "localhost";
$userName = "root";
$password = "";
$dbName = "test";

//connection

$conn = mysqli_connect($serveName, $userName, $password, $dbName);

if(mysqli_connect_errno()){
    echo "Failed to connect!";
    exit();
}

?>