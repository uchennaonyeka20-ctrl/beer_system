<?php

include("../connection.php");

$id = $_GET['id'];


$sql = "DELETE FROM beer_inventory WHERE id = $id";

$deleteResult = mysqli_query($conn, $sql);

if(!$deleteResult){
    die("Failed to Delete Specified Beer ID: " . mysqli_error($conn));
}else{
    echo "Deletion Successful!";
}


?>

<a href="view.php">Back to View</a> <a href="add_beer.php">Add Beer</a>