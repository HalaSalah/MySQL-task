

<?php

include "connection.php";


$query = "
SELECT DISTINCT productCode
FROM orderdetails
";
$result = $conn->query($query);

if ($result->num_rows > 0) {
?>


<form action="handleProduct_customer.php" method="post" class="container mt-5">
  
  <div class="form-group">
      <label>Product Code:</label>
      <select class="form-control" name="productCode">
        <?php 

    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <option><?php echo $row['productCode'] ?></option>
<?php
    }}
        ?>
      </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




        
