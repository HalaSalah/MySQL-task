

<?php

include "connection.php";


$query = "
SELECT DISTINCT city
FROM customers
ORDER BY city
";
$result = $conn->query($query);

if ($result->num_rows > 0) {
?>


<form action="handelCustomer_City.php" method="post" class="container mt-5">
  
  <div class="form-group">
      <label>city</label>
      <select class="form-control" name="city">
        <?php 

    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <option><?php echo $row['city'] ?></option>
<?php
    }}
        ?>
      </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




        
