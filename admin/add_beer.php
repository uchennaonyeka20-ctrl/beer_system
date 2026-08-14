
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <form action="add_beer.php" method="POST" id="form">
        <p>
            <label for="name">Name: </label><input type="text" id="name" name="name" placeholder="e.g Heineken" required>
        </p>
        <p>
            <label for="type">Type: </label><input type="text" id="type" name="type" placeholder="e.g lager"  required>
        </p>
        <p>
            <label for="brewer">Brewer: </label><input type="text" id="brewer" name="brewer" placeholder="e.g Nigerian Breweries Plc"  required>
        </p>
        <p>
            <label for="price">Price: </label><input type="text" id="price" name="price" placeholder="99.99" required>
        </p>
        <p>
            <label for="stock">Stock: </label><input type="text" id="stock" name="stock" placeholder="100"  required>
        </p>
        <input type="submit" id="submit" name="submit" value="Add Beer"> <input type="reset" id="reset" name="reset" value="Reset">
    </form>
    
</body>
</html>
<?php
    include('../connection.php');

 if(!$conn){
    die("Failed Connection: " . mysqli_connect_error());
}else{
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $type = $_POST['type'];
        $brewer = $_POST['brewer'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];

        $sql = "INSERT INTO beer_inventory(name, type, brewer, price, stock)
            VALUES('$name', '$type', '$brewer', $price, $stock)";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo mysqli_error($conn);
    }else{
       echo "Beer added Successfully!";
       header("Location: view.php");
    }
    }

    
}

    




?>