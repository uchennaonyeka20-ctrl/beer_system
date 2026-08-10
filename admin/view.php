<?php
include("../connection.php");

$sql = "SELECT * FROM beer_inventory";

$result = mysqli_query($conn, $sql);

if(!$result){
    die("Retrieval of Beers Failed: " . mysqli_error($conn));
}else{
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Type</th><th>Brewer</th><th>Price($)</th><th>Stock</th></tr>";
  while($row=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['brewer'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['stock'] . "</td>";
    echo "<td>" . "<a href='edit.php?id=" . $row['id'] . "'>Edit</a>" . "</td>";
    echo "</tr>";
  }
  echo "</table>";
}

?>