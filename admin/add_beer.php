
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="add_beer.php" method="POST" id="form">
        <p>
            <label for="name">Name: <input type="text" id="name" name="name"></label>
        </p>
        <p>
            <label for="type">Type: <input type="text" id="type" name="type"></label>
        </p>
        <p>
            <label for="brewer">Brewer: <input type="text" id="brewer" name="brewer"></label>
        </p>
        <p>
            <label for="price">Price: <input type="text" id="price" name="price"></label>
        </p>
        <p>
            <label for="stock">Stock: <input type="text" id="stock" name="stock"></label>
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