<?php
include("connection.php");

$conn = $_SESSION['$conn'];

if($conn){
    echo "Welcome to Dala Trading Express";
}

?>