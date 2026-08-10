<?php

include("../connection.php");

$id = $_GET['id'];

echo "The id is " . $id;

$sql = "SELECT * FROM beer_inventory WHERE id = $id";

$result = mysqli_query($conn, $sql);

if(!$result){
    die("Failed to retrieve ID: " . mysqli_error($conn));
}else{
    $row = mysqli_fetch_assoc($result);
}
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method='POST'>
<p>
<label for='name'>Name: </label><input type='text' id='name' name='name' value='<?php echo $row['name']; ?>'>
</p>
    
<p>
<label for='type'>Type: </label><input type='text' id='type' name='type' value='<?php echo $row['type']; ?>'>
</p>

<p>
<label for='brewer'>Brewer: </label><input type='text' id='brewer' name='brewer' value='<?php echo $row['brewer']; ?>'>
</p>

<p>
<label for='price'>Price: </label><input type='text' id='price' name='price' value='<?php echo $row['price']; ?>'>
</p>

<p>
<label for='stock'>Stock: </label><input type='text' id='stock' name='stock' value='<?php echo $row['stock']; ?>'>
</p>

<input type='submit' id='update' name='update' value='Update Beer'>    <input type='reset' id='reset' name='reset' value='Reset'>
</form>
    
</body>
</html>