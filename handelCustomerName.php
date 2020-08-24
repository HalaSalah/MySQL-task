<?php

include "connection.php";

?>


<table class="container table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
        <th scope="col">customerName</th>
    </tr>
  </thead>
  <tbody>

<?php

$name = $_POST['name'];

$query = "SELECT customerName
FROM customers
WHERE customerName LIKE '%$name%'

";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        
    <tr>
    <td><?php echo $row['customerName'] ?></td>
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