<?php

include "connection.php";

?>


<table class="container table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">customerName</th>
      <th scope="col">creditLimit</th>
    </tr>
  </thead>
  <tbody>

<?php

$query = "SELECT customerName , creditLimit
FROM customers
WHERE creditLimit>20000
";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        
    <tr>
    <td><?php echo $row['customerName'] ?></td>
    <td><?php echo $row['creditLimit'] ?></td>
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