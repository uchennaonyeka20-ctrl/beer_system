<?php
include("connection.php");

$conn = $_SESSION['$conn'];

if($conn){
    echo "Welcome to Dala Trading Express";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br><a href="/admin/add_beer.php">Admin Page</a>
    
    
</body>
</html>