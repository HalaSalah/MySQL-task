<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- main CSs -->
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
    <?php
      if(!isset($_SESSION['userName']))
      {
        ?>
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login </a>
      </li>


        <?php
      }else {
        ?>
<li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customers.php">customers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customer_id.php">customer_id</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customerOrders.php">customerOrders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mostSelling.php">mostSelling</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="em_mang.php">em_mang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customerName.php">customerName</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customer_city.php">customer_city</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product_quantity.php">product_quantity</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="city_rich.php">city_rich</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product_customer.php">product_customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

        <?php
      }
    ?>

      
      
    </ul>
    
  </div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>