<?php

include "connection.php";

?>


<table class="container table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
        <th scope="col">customerName</th>
        <th scope="col">productCode</th>
        <th scope="col">quantityOrdered</th>
        <th scope="col">orderNumber</th>
    </tr>
  </thead>
  <tbody>

<?php

$productCode = $_POST['productCode'];

$query = "SELECT customers.customerName, orderdetails.productCode , orderdetails.quantityOrdered , orderdetails.orderNumber
FROM customers JOIN orders JOIN orderdetails
ON customers.customerNumber = orders.customerNumber
AND orders.orderNumber = orderdetails.orderNumber
WHERE orderdetails.productCode='$productCode'	
ORDER BY customers.creditLimit DESC
";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        
    <tr>
    <td><?php echo $row['customerName'] ?></td>
    <td><?php echo $row['productCode'] ?></td>
    <td><?php echo $row['quantityOrdered'] ?></td>
    <td><?php echo $row['orderNumber'] ?></td>
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