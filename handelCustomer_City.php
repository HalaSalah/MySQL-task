<?php

include "connection.php";

?>


<table class="container table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
        <th scope="col">customerName</th>
        <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>

<?php

$city = $_POST['city'];

$query = "SELECT customerName ,city
FROM customers
WHERE city='$city'
ORDER BY customerName
";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        
    <tr>
    <td><?php echo $row['customerName'] ?></td>
    <td><?php echo $row['city'] ?></td>
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