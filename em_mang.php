<?php

include "connection.php";

?>


<table class="container table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
        <th scope="col">manager</th>
        <th scope="col">employee</th>
    </tr>
  </thead>
  <tbody>

<?php


$query = "SELECT em.firstName , mang.lastName
FROM employees as em JOIN employees as mang
ON em.employeeNumber = mang.reportsTo

";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
        
    <tr>
    <td><?php echo $row['firstName'] ?></td>
    <td><?php echo $row['lastName'] ?></td>
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