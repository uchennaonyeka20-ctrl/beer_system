<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "beer_shop");
$_SESSION['$conn'] = $conn;
if(!$conn){
    die("Failed: " . mysqli_connect_error());
}else{
    


}

?>