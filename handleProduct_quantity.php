<?php

include "connection.php";

?>


<table class="container table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
        <th scope="col">productName</th>
        <th scope="col">quantityInStock</th>
    </tr>
  </thead>
  <tbody>

<?php

$quantity = $_POST['quantity'];

$query = "SELECT productName , quantityInStock
FROM products
WHERE quantityInStock>$quantity
ORDER BY quantityInStock

";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        
    <tr>
    <td><?php echo $row['productName'] ?></td>
    <td><?php echo $row['quantityInStock'] ?></td>
    </tr>

<?php        
    }
} else {
    echo "0 results";
}
$conn->close();
?>


  
  </tbody>
</table>