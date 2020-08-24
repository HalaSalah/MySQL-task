<?php

include "connection.php";

?>


<table class="container table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
        <th scope="col">customerName</th>
        <th scope="col">no. orders</th>
    </tr>
  </thead>
  <tbody>

<?php


$query = "SELECT customers.customerName , COUNT(orders.orderNumber)
FROM customers JOIN orders
ON customers.customerNumber = orders.customerNumber
GROUP BY customers.customerName

";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        
    <tr>
    <td><?php echo $row['customerName'] ?></td>
    <td><?php echo $row['COUNT(orders.orderNumber)'] ?></td>
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