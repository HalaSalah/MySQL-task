<?php

include "connection.php";

?>


<table class="container table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
        <th scope="col">productName</th>
        <th scope="col">quantityOrdered</th>
        <th scope="col">total</th>
    </tr>
  </thead>
  <tbody>

<?php


$query = "SELECT products.productName , orderdetails.quantityOrdered , SUM(orderdetails.quantityOrdered*orderdetails.priceEach)
FROM products JOIN orderdetails
ON products.productCode = orderdetails.productCode
GROUP BY products.productName
ORDER BY orderdetails.quantityOrdered DESC

";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        
    <tr>
    <td><?php echo $row['productName'] ?></td>
    <td><?php echo $row['quantityOrdered'] ?></td>
    <td><?php echo $row['SUM(orderdetails.quantityOrdered*orderdetails.priceEach)'] ?></td>
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