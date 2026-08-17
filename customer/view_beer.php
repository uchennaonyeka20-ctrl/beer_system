<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Page</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <header>
        <h1>Welcome to Dala Trading Express</h1>
    </header>
    <main>

        
        <?php
include("../connection.php");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}else{
    $sql = "SELECT id, name, price from beer_inventory";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        die("Failed to retrieve item data: " . mysqli_error($conn));
    }else{
    
        while($row = mysqli_fetch_assoc($result)){

        echo "<p>";
        echo $row['name'] . " " .  "$" . $row['price'] . "<br>";
        echo "<input type = 'number' name = 'quantity' id = 'quantity' min = 0 max = 500 placeholder = 0 >";
        echo "</p>";
        
        }
        echo "<input type = 'submit' name = 'placeOrder' value = 'Place Order' style = 'margin-bottom: 10px;'>";
    }
}


?>
    </main>
    <footer id="footer">
        <p>Author: Uchenna Nelson Onyeka</p>
        <p>Email: <small><a href="mailto: uche123@gmail.com">uche123@gmail.com</a></small></p>
        <p>Contact: 012-345-6789</p>
        <p>&copy; copyright reserved</p>
    </footer>
</body>
</html>

